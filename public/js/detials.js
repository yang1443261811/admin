/**
 * 获取文章评论
 * @type {string}
 */
var requestUri = '/comment/show/' + article_id;
console.log(requestUri);
$.post(requestUri, {"type": commentable_type, "_token": token}, function (response) {
    console.log(response);
    var html, data = response['data'];
    if (data.length > 0) {
        html = makeHtml(data);
        $('.form-horizontal').before(html);
    }
}, 'json');

/**
 * 文章评论
 */
$('.comments').submit(function (e) {
    e.preventDefault();
    if (!$('.text').val()) {
        layer.msg('请输入评论');
        return false;
    }
    self = $(this);
    $.post(self.attr("action"), self.serialize(), function (result) {
        var data = new Array(result['data']);
        if (data.length > 0) {
            layer.msg('评论成功');
            var html = makeHtml(data);
            $('.form-horizontal').before(html);
        } else {
            layer.msg('评论失败');
        }

    }, 'json')
});


/**
 * 回复按钮点击事件
 *
 * @type {string}
 */
var data = '';
$('body').on('click', '.reply', function () {
    data = JSON.parse($(this).attr('value'));
    var editor = $(this).parents('.heading').siblings('.editor');
    editor.toggle();
    editor.children('input').attr('placeholder', '回复'+data.from_user+'：');
});


/**
 * 子评论
 */
$('body').on('click', '.editor .btn', function () {
    var self = $(this);
    var text = self.siblings('.reply-text').val();
    if (!text) {
        layer.msg('评论内容不能为空');
        return false;
    }
    var params = {
        '_token':token,
        'content':text,
        'comment_id':data.id,
        'to_user':data.from_user,
        'commentable_id':article_id,
        'commentable_type':commentable_type,
    };
    $.post('/comment/create', params, function (response) {
        if (response) {
            self.parent().hide();
            layer.msg('评论成功');
            var res = response['data'];
            var attr = JSON.stringify(res);
            var comment = self.parents('.editor').siblings('.markdown').find('ul');
            var html = "<li><a href=''>"+res.from_user+"</a>:回复<a href=''>&nbsp;"+data.from_user+"</a>:"+text+"" +
                       "<p class='created'>"+res.created_at+"<span class='child-reply' data='"+attr+"'>&nbsp;&nbsp;回复</span></p>" +
                       "</li>";
            comment.append(html);
        }
    }, 'json');
});

/**
 * 子评论回复按钮事件
 * @type {string}
 */
var content = '';
$('body').on('click', '.child-reply', function () {
    if ($(this).parent().siblings().hasClass('edit')) {
        $(this).parent().siblings().remove('.edit');
        return false;
    }
    content = JSON.parse($(this).attr('data'));
    var edit = $(this).parent().siblings('.edit');
    var html = '<p class="edit">' +
        '<input type="text" class="c_reply" placeholder="回复：'+content.to_user+'"><span class="btn">发表</span>' +
        '</p>';
    $(this).parent().after(html);
});


/**
 * 添加子评论
 */
$('body').on('click', '.edit .btn', function () {
    var self = $(this);
    var text = self.siblings('.c_reply').val();
    var params = {
        '_token':token,
        'content':text,
        'comment_id':content.id,
        'to_user':content.from_user,
        'commentable_id':article_id,
        'commentable_type':commentable_type,
    };
    $.post('/comment/create', params, function (response) {
        if (response) {
            layer.msg('评论成功');
            var res = response['data'];
            var attr= JSON.stringify(res);
            var html = "<li><a href='/user/center/'"+res.from_user+">"+res.from_user+"</a>:回复<a href='/user/center/"+res.from_user+"'>&nbsp;"+content.from_user+"</a>:"+text+"" +
                       "<p class='created'>"+res.created_at+"<span class='child-reply' data='"+attr+"'>&nbsp;&nbsp;回复</span></p>" +
                       "</li>";
            self.parents('ul').append(html);
            self.parent().remove('.edit');
        }
    }, 'json');
})


/**
 * vote投票
 */
$('.comment').on('click', '.up, .down', function () {
    var self = $(this);
    var type = self.attr('class');
    var id = self.attr('value');
    var url = '/comment/vote/' + type;
    $.post(url, {'id': self.attr('value'), '_token': token}, function () {
        if (type == 'up') {
            self.children('i').replaceWith('<i class="ion-happy text-success"></i>');
            self.siblings('.down').children('i').replaceWith('<i class="ion-sad-outline"></i>');
            var count = self.children('small').html();
            count = parseInt(count) + 1;
            self.children('small').html(count);
        } else {
            self.children('i').replaceWith('<i class="ion-sad text-danger"></i>');
            self.siblings('.up').children('i').replaceWith('<i class="ion-happy-outline"></i>');
            var total = self.siblings('.up').children('small').html();
            total = parseInt(total) - 1;
            self.siblings('.up').children('small').html(total);
        }
    }, 'json');
});


/**
 * 构建评论标签
 * @param data
 * @returns {string}
 */
function makeHtml(data) {
    var html = '';
    for (var i = 0; i < data.length; i++) {
        var user = JSON.stringify(data[i]);
        var childNode = '';
        if (data[i]['child']) {
            var child = data[i]['child'];
            $.each(child, function(key, value){
                var data = JSON.stringify(value);
                childNode +=
                    "<li>" +
                    "<a href='/user/center/"+value.from_user+"'>"+value.from_user+"</a>:回复" +
                    "<a href='/user/center/"+value.to_user+"'>&nbsp;"+value.to_user+"</a>:" +value.content+
                    "<p class='created'>"+value.created_at+"<span class='child-reply' data='"+data+"'>&nbsp;&nbsp;回复</span></p>" +
                    "</li>";
            });
        }
        html +=
            "<div class='media'>" +
                "<div class='media-left'>" +
                    "<a href='/user/center/" + data[i]["user_id"] + "'>" +
                        "<img src='" + data[i]["avatar"] + "' class='media-object img-circle'>" +
                    "</a>" +
                "</div>" +
                "<div class='media-body box-body'>" +
                    "<div class='heading'>" +
                        "<i class='ion-person'></i>" +
                        "<a href='/user/center/"+data[i]["user_id"]+"'>" + data[i]["from_user"] + "</a>&nbsp;&nbsp;&nbsp;&nbsp; " +
                        "<i class='ion-clock'></i>" + data[i]["created_at"]+""+
                        "<span class='pull-right operate'><span class='vote-button'>" +
                        "<a class='up' value='" + data[i]["id"] + "'>" +
                            "<i class='ion-happy-outline'></i> " +
                            "<small>" + data[i]['vote_count'] + "</small>" +
                        "</a> " +
                        "<a class='down' value='" + data[i]["id"] + "'><i class='ion-sad-outline'></i></a>" +
                        // "</span> <a class="reply">回復<i class="ion-ios-undo"></i></a></span>" +
                        "</span> <a class='reply' value='"+user+"'>回復</a></span>" +
                    "</div>" +
                    "<div class='editor'>" +
                        "<input type='text' class='reply-text' placeholder=''>" +
                        "<span class='btn'>发表</span>" +
                    "</div>"+
                    " <div class='comment-body markdown'>" +
                        "<h2>" + data[i]["content_raw"] + "</h2>" +
                        "<ul>"+childNode+"</ul>"+
                    "</div>" +
                "</div>" +
            "</div>";
    }
    return html;
}
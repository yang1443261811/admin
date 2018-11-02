<html lang="zh" class="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB" />
    <title>PJ Blog Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/css/app.css?id=8f841e10d99c3fdf0293" />
    <link rel="stylesheet" href="/css/common.css?id=8f841e10d99c3fdf0293" />
    <style>
        [v-cloak] { display: none; }
    </style>
    <script>
        window.Laravel = {
            csrfToken: "sPDZRuK5vRPfdIpyrKEDS10HjBI1LstYX5C4l1TB"
        }
        window.Language = "en"
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>
<body class="" style="padding-right: 0px;">
<div id="wrapper" class="">
    {{--侧栏--}}
    @include('common.sidebar')
    <div id="page-content-wrapper">
        <nav class="navbar navbar bg-white">
            <div class="navbar-brand">
                <a class="navbar-toggler text-left"><i class="fas fa-bars text-secondary"></i></a>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="ibox">
                    <div class="ibox-title">
                        <small class="float-right"><a href="/dashboard/discussions/" class="btn btn-sm btn-secondary">Back</a></small>
                        <h5>Create Discussion</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form class="col-sm-9 offset-sm-1">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-10">
                                        <div tabindex="-1" class="multiselect">
                                            <div class="multiselect__select"></div>
                                            <div class="multiselect__tags">
                                                <div class="multiselect__tags-wrap" style="display: none;"></div>
                                                <!---->
                                                <div class="multiselect__spinner" style="display: none;"></div>
                                                <input name="" type="text" autocomplete="off" placeholder="Select Tags" tabindex="0" class="multiselect__input" style="width: 0px; position: absolute; padding: 0px;" />
                                                <!---->
                                                <span class="multiselect__placeholder"> Select Tags </span>
                                            </div>
                                            <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;">
                                                <ul class="multiselect__content" style="display: inline-block;">
                                                    <!---->
                                                    <li class="multiselect__element"><span data-select="Press enter to select" data-selected="Selected" data-deselect="Press enter to remove" class="multiselect__option multiselect__option--highlight"><span>dolorum</span></span>
                                                        <!----></li>
                                                    <li class="multiselect__element"><span data-select="Press enter to select" data-selected="Selected" data-deselect="Press enter to remove" class="multiselect__option"><span>odit</span></span>
                                                        <!----></li>
                                                    <li class="multiselect__element"><span data-select="Press enter to select" data-selected="Selected" data-deselect="Press enter to remove" class="multiselect__option"><span>commodi</span></span>
                                                        <!----></li>
                                                    <li class="multiselect__element"><span data-select="Press enter to select" data-selected="Selected" data-deselect="Press enter to remove" class="multiselect__option"><span>molestias</span></span>
                                                        <!----></li>
                                                    <li class="multiselect__element"><span data-select="Press enter to select" data-selected="Selected" data-deselect="Press enter to remove" class="multiselect__option"><span>est</span></span>
                                                        <!----></li>
                                                    <li style="display: none;"><span class="multiselect__option">No elements found. Consider changing the search query.</span></li>
                                                    <li style="display: none;"><span class="multiselect__option">List is empty.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="content" style="display: none;"></textarea>
                                        <div class="editor-toolbar">
                                            <a title="Bold (Ctrl-B)" tabindex="-1" class="fa fa-bold"></a>
                                            <a title="Italic (Ctrl-I)" tabindex="-1" class="fa fa-italic"></a>
                                            <a title="Heading (Ctrl-H)" tabindex="-1" class="fa fa-header"></a>
                                            <i class="separator">|</i>
                                            <a title="Quote (Ctrl-')" tabindex="-1" class="fa fa-quote-left"></a>
                                            <a title="Generic List (Ctrl-L)" tabindex="-1" class="fa fa-list-ul"></a>
                                            <a title="Numbered List (Ctrl-Alt-L)" tabindex="-1" class="fa fa-list-ol"></a>
                                            <i class="separator">|</i>
                                            <a title="Create Link (Ctrl-K)" tabindex="-1" class="fa fa-link"></a>
                                            <a title="Insert Image (Ctrl-Alt-I)" tabindex="-1" class="fa fa-picture-o"></a>
                                            <i class="separator">|</i>
                                            <a title="Toggle Preview (Ctrl-P)" tabindex="-1" class="fa fa-eye no-disable"></a>
                                            <a title="Toggle Side by Side (F9)" tabindex="-1" class="fa fa-columns no-disable no-mobile"></a>
                                            <a title="Toggle Fullscreen (F11)" tabindex="-1" class="fa fa-arrows-alt no-disable no-mobile"></a>
                                            <i class="separator">|</i>
                                            <a title="Markdown Guide" tabindex="-1" class="fa fa-question-circle" href="https://simplemde.com/markdown-guide" target="_blank"></a>
                                        </div>
                                        <div class="CodeMirror cm-s-paper CodeMirror-wrap CodeMirror-empty">
                                            <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 15px; left: 15px;">
                                                <textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
                                            </div>
                                            <div class="CodeMirror-vscrollbar" cm-not-content="true">
                                                <div style="min-width: 1px; height: 0px;"></div>
                                            </div>
                                            <div class="CodeMirror-hscrollbar" cm-not-content="true">
                                                <div style="height: 100%; min-height: 1px; width: 0px;"></div>
                                            </div>
                                            <div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
                                            <div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
                                            <div class="CodeMirror-scroll" tabindex="-1">
                                                <div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: -17px; border-right-width: 13px; min-height: 32px; padding-right: 0px; padding-bottom: 0px;">
                                                    <div style="position: relative; top: 0px;">
                                                        <div class="CodeMirror-lines">
                                                            <div style="position: relative; outline: none;">
                                                                <pre class="CodeMirror-placeholder" style="height: 0px; overflow: visible;">Please input the discussion content.</pre>
                                                                <div class="CodeMirror-measure"></div>
                                                                <div class="CodeMirror-measure"></div>
                                                                <div style="position: relative; z-index: 1;"></div>
                                                                <div class="CodeMirror-cursors">
                                                                    <div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 24px;">
                                                                        &nbsp;
                                                                    </div>
                                                                </div>
                                                                <div class="CodeMirror-code">
                                                                    <pre class=" CodeMirror-line "><span style="padding-right: 0.1px;"><span cm-text="">​</span></span></pre>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; height: 13px; width: 1px; border-bottom: 0px solid transparent; top: 32px;"></div>
                                                <div class="CodeMirror-gutters" style="display: none; height: 45px;"></div>
                                            </div>
                                        </div>
                                        <div class="editor-preview-side"></div>
                                        <div class="editor-statusbar">
                                            <span class="autosave"></span>
                                            <span class="lines">1</span>
                                            <span class="words">0</span>
                                            <span class="cursor">0:0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 col-form-label">
                                        Status
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="togglebutton" style="margin-top: 6px;">
                                            <label><input type="checkbox" name="status" value="1" /> <span class="toggle"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-info">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/common.js"></script>
</body>
</html>
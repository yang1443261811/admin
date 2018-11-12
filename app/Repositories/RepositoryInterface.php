<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * 获取所有数据
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*'));

    /**
     * 分页获取数据
     *
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'));

    /**
     * 创建数据
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * 更新数据
     *
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * 删除数据
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * 查询数据
     *
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*'));

    /**
     * 按条件查询数据
     *
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, $columns = array('*'));
}
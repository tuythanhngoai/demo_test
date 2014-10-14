<div class="nav_admin">
    <?php $action = array('index', 'add', 'edit', 'delete'); ?>
    <ul>
        <li class="active">
            <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'index')); ?>">Danh sách</a>
        </li>
        <li>
            <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'add')); ?>">Thêm</a>
        </li>
        <li>
            <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'edit')); ?>">Sửa</a>
        </li>
        <li>
            <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'delete')); ?>">Xóa</a>
        </li>
        <?php if ($this->params['action'] != 'admin_index'): ?>
            <li>
                <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'add')); ?>">Lưu</a>
            </li>
            <li>
                    <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'add')); ?>">Hủy</a>
                </li>
                <li>
                    <a href="<?= Router::url(array('controller' => $this->params['controller'], 'action' => 'index')); ?>">Quay lại danh sách</a>
                    </li>
                <?php endif; ?>
    </ul>
</div>
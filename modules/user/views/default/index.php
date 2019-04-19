<?php
$this->title = 'Все пользователи';

if (!isset($users) || empty($users)):
    echo "Пользователей не найдено !!!";
else: ?>

    <div class="container">
        <h2>Пользователи</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Ник</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php endif; ?>

<button class="btn btn-success">Сгенерировать 10 пользователей</button>






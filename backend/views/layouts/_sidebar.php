<?php

?>

<?php echo \yii\bootstrap5\Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['/site/index']
        ],
        [
            'label' => 'User Management',
            'url' => ['/user/management']
        ],
        [
            'label' => 'Equipment Management',
            'url' => ['/equipment/management']
        ],
        [
            'label' => 'Equipment Group',
            'url' => ['/equipment/group']
        ]
    ]
])
?>

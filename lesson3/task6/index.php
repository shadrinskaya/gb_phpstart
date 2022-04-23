<?php

$menu = [
	[
		'url' => '#',
		'name' => 'Меню1',
	],
	[
		'url' => '#',
		'name' => 'Меню2',
	],
	[
		'url' => '#',
		'name' => 'Меню3',
	],
	[
		'url' => '3',
		'name' => 'Меню4',
	],
	[
		'url' => '4',
		'name' => 'Меню5',
	],
	[
		'url' => '6',
		'name' => 'Меню6',
	]
];
?>


<ul>
	<?php foreach ($menu as $key => $value): ?>
	<li><a href='<?=$value['url']?>'><?=$value['name']?></a></li>
	<?php endforeach; ?>
</ul>

<?php
//вложенность

function renderMenu($menu){
	$out = "<ul>";
	foreach ($menu as $item){
		$out .= "<li><a href='{$item['url']}'>{$item['name']}</a>";
		if (isset($item['submenu'])){
			$out .= renderMenu($item['submenu']);
		}
		$out .= "</li>";
	}

	$out .= "</ul>";
	return $out;
}

echo renderMenu($menu);
<?php
//課題1
//インデックス配列

$skills = ["HTML", "CSS", "jQuery"];
$skills[] = "Photoshop";
echo count($skills) . "<br>";
echo $skills[0] . "<br>";
echo $skills[3] . "<br>";

//課題2
//連想配列
$work = [
  "title" => "タイトル",
  "category" => "カテゴリ",
  "year" => 2024,
  "url" => "ユーアルーエル"
];

echo "タイトル：{$work['title']}<br>";

//課題3
//多次元配列
$works = [
  [
    "title" => "建築のHP",
    "category" => "建築",
    "year" => 2025,
    "url" => "http~",
  ],
  [
    "title" => "歯医者のHP",
    "category" => "医療",
    "year" => 2023,
    "url" => "http~",
  ],
  [
    "title" => "不動産のHP",
    "category" => "不動産",
    "year" => 2025,
    "url" => "http~",
  ],
];

echo $works[1]["title"] . "<br>";
echo $works[2]["year"];
echo '<pre>';
print_r($works);
echo '</pre>';

echo "実績の件数は全部で" . count($works) . "件です";

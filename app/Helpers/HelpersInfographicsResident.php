<?php

if (!function_exists('naturalJoin')) {
  function naturalJoin($list)
  {
    if (count($list) === 0) return '';
    if (count($list) === 1) return $list[0];

    $last = array_pop($list);
    return implode(', ', $list) . ' dan ' . $last;
  }
}

if (!function_exists('generateSummaryText')) {
  function generateSummaryText($genderName, $collection)
  {
    $totalPopulation = $collection->sum('total');
    if ($totalPopulation == 0) return "";

    $maxVal = $collection->max('total');
    $maxGroups = $collection->where('total', $maxVal)->pluck('age')->toArray();
    $maxPercent = number_format(($maxVal / $totalPopulation) * 100, 2);

    $maxAgeString = naturalJoin($maxGroups);

    $minVal = $collection->min('total');
    $minGroups = $collection->where('total', $minVal)->pluck('age')->toArray();
    $minPercent = number_format(($minVal / $totalPopulation) * 100, 2);

    $minAgeString = naturalJoin($minGroups);

    return "Untuk jenis kelamin <strong>{$genderName}</strong>, kelompok umur <strong>{$maxAgeString}</strong> adalah kelompok umur tertinggi dengan " . (count($maxGroups) > 1 ? "masing-masing " : "") . "berjumlah <strong>{$maxVal} orang</strong> atau <strong>{$maxPercent}%</strong>. Sedangkan, kelompok umur <strong>{$minAgeString}</strong> adalah yang terendah dengan jumlah <strong>{$minVal} orang</strong> atau <strong>{$minPercent}%</strong>.";
  }
}

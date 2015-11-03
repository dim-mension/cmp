<?php
function makeHead($heads){
	echo "<table>\n<thead><tr>";
	foreach($heads as $head)
		echo "<th>$head</th>\n";
	echo "</tr>\n</thead>";
	makeBody();
}

function makeCell($v){
	echo "<td> $v  </td>";
}

function endTable(){
	echo "</tr>\n</tbody>\n</table>\n";
}

function newRow(){
	echo "</tr>\n<tr>";
}

function dayOfTheWeek($year, $month){
	return date('N', mktime(0, 0, 0, $month, 1, $year));
}

function daysInMonth($year, $month){
	return date('t', mktime(0, 0, 0, $month, 1, $year));
}

function makeBody(){
	echo "<tbody><tr>\n";
}

function jumpTo($day){
	for($i = 1; $i < $day; $i++)
		makeCell(' ');
}

function makeCalendar($year, $month){
	makeHead(array("Пон", "Вто", "Сре", "Чет", "Пят", "Суб", "Вос"));
	$dayOfTheWeek = dayOfTheWeek($year, $month);
	jumpTo($dayOfTheWeek);
	for($i = 1; $i <= daysInMonth($year, $month); $i++){
		makeCell($i);
		if($dayOfTheWeek % 7 == 0)
			newRow();
		$dayOfTheWeek++;
	}
	endTable();
}

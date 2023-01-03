<?php 
$content=file_get_contents('http://static.cricinfo.com/rss/livescores.xml');


$x=new SimpleXmlElement($content);



 echo "<table border=1>";
foreach($x->channel->item as $entry){
echo "<tr>";
echo "<td><a href=$entry->link target='_blank'>";
echo $entry->description;

echo "</a></td>";

echo "</tr>";
}
echo "</table>";


?>
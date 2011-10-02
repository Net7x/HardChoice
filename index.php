<?php

function menu_sel($type) {
  if (isset($_GET['topic'])) {
    $cur_topic = $_GET['topic'];
    if($cur_topic == $type) {
      return " id='selected'";
    }
  }
  return "";//"|type=".$type."|topic=".$cur_topic;
}

echo "<html>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<title>";
echo "Сложный выбор - Магнитогорск";
echo "</title>";
echo "<link rel='stylesheet' type='text/css' href='main.css'>";
echo "</head>";
echo "<body>";

?>

  <div id="container">
    <div id="header">
      <h1>
        Сложный выбор
      </h1>
    </div>
    <div id="navigation">
      <ul>
        <li><a href="?topic=articles"<?php echo menu_sel('articles')?>>Статьи</a></li>
        <li><a href="?topic=prof"<?php echo menu_sel('prof')?>>Профессии</a></li>
        <li><a href="?topic=study"<?php echo menu_sel('study')?>>Учебные заведения</a></li>
        <li><a href="?topic=test"<?php echo menu_sel('test')?>>Тесты</a></li>
        <li><a href="?topic=org"<?php echo menu_sel('org')?>>Организации</a></li>
        <li><a href="?topic=contact"<?php echo menu_sel('contact')?>>Контакты</a></li>
      </ul>
    </div>
    <div id="content-container">
      <div id="content">
        <h2>
          Заголовок статьи
        </h2>
        <p>
          Большинство молодых людей, размышляющих о дальнейших образовательных планах или о трудоустройстве, вообще очень мало осведомлены о том, какие бывают профессии и чем занимаются их представители. В результате ребята оказываются в ситуации выбора кота в мешке
        </p>
        
      </div>
      <div id="aside">
        <h3>
          Анонс
        </h3>
        <p>
          Сотрудники
        </p>
      </div>
      <div id="footer">
        2011, IT project for CISCO by Shageev P
      </div>
    </div>
  </div>
<?php
echo "</body>"; 
echo "</html>"; 
?>

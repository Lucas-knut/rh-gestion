<?php include_once 'dashboarddao.php'?>

<h3 class="title">Nombre d'équipes</h3>

<div  class="flex justify-center" width="300" height="300" style="display: block; box-sizing: border-box; height: 300px; width: 300px;">
<section class="flex justify-center">
<?php $sumTeam = getTeamNb()?>
        <a class="text-9xl" href="teams"><?= $sumTeam["count(*)"]?></a>
        </section>
</div>
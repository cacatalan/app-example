<?php

function cdrom($link) {
  
?>
<div class="cdrom">
  <img src="<?= $link ?>" />
  <div class="centro"></div>
</div>

<style>
  .cdrom{
    position: relative;
    width: 300px ; height: 300px ;
    display: inline-block ;
  }
  .cdrom img{
    border-radius: 50%;
    height: 300px;
  }
  .cdrom img:hover{
    animation: cdGirando 2.5s linear infinite;
  }
  @keyframes cdGirando{
    0%{
      transform: rotate(0);
    }
    100%{
      transform: rotate(360deg);
    }
  }
  .centro{
    position: absolute;
    background-color: white;
    height: 80;
    width: 80;
    border-radius: 50%;
    top: 110px;
    left: 110px;
  }
</style>

<?php
  return "" ;
}
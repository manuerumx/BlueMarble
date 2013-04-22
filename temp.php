<?php 
// Set the current page at 1 if it's not already set
if(!isset($_GET['p'])){$_GET['p']=1;}
$transactions = array('13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','13132','123','513413','13','123','1313','13','23','2'); 
$per_page = 12;
$count_transactions = count($transactions);
$pages = ceil($count_transactions / $per_page);
$current_page = (isset($_GET['p'])) ? $_GET['p'] : 1;
$clean_query_string = (isset($_GET['user_id'])) ? str_ireplace("p=".@$_GET['p']."&", "", $_SERVER['QUERY_STRING']) : str_ireplace("p=".@$_GET['p'], "", $_SERVER['QUERY_STRING']);
if(substr($clean_query_string,-1)=="&"){$clean_query_string = substr_replace($clean_query_string, "", -1);}
 
$transactions = array_slice($transactions, ($current_page - 1) * $per_page, $per_page);
 
?>
 
<?php if(  ($count_transactions > $per_page || isset($_GET['p'])) && $pages > 1):?>
<div class="pagination">
    <ul>
        <?php if($pages <= 12):?>
 
        <li class="prev <?php if($_GET['p']==1 || !isset($_GET['p'])):?>disabled<?php endif;?>"><?php if($_GET['p']==1 || !isset($_GET['p'])):?><a href="#">&larr; Previous</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']-1;?>&<?php echo $clean_query_string;?>">&larr; Previous</a><?php endif;?></li>
        <?php for($i=1;$i<=$pages;$i++):?>
        <li class="<?php if($i==$_GET['p']) echo "active";?>"><?php if($i!=$_GET['p']):?><a href="temp.php?p=<?php echo $i;?>&<?php echo $clean_query_string;?>"><?php echo $i;?></a><?php else:?><a href="#"><?php echo $i;?></a><?php endif;?></li>
        <?php endfor;?>
        <li class="next <?php if($_GET['p']==$pages):?>disabled<?php endif;?>"><?php if($_GET['p']==$pages):?><a href="#">Next &rarr;</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']+1;?>&<?php echo $clean_query_string;?>">Next &rarr;</a><?php endif;?></li>
 
        <?php else: ?>
 
            <?php if($current_page <= 5):?>
            <li class="prev <?php if($_GET['p']==1 || !isset($_GET['p'])):?>disabled<?php endif;?>"><?php if($_GET['p']==1 || !isset($_GET['p'])):?><a href="#">&larr; Previous</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']-1;?>&<?php echo $clean_query_string;?>">&larr; Previous</a><?php endif;?></li>
            <?php for($i=1;$i<=$current_page+5;$i++):?>
            <li class="<?php if($i==$_GET['p']) echo "active";?>"><?php if($i!=$_GET['p']):?><a href="temp.php?p=<?php echo $i;?>&<?php echo $clean_query_string;?>"><?php echo $i;?></a><?php else:?><a href="#"><?php echo $i;?></a><?php endif;?></li>
            <?php endfor;?>
            <li class=""><a href="#">...</a></li>
            <li class=""><a href="temp.php?p=<?php echo $pages;?>&<?php echo $clean_query_string;?>"><?php echo $pages;?></a></li>
            <li class="next <?php if($_GET['p']==$pages):?>disabled<?php endif;?>"><?php if($_GET['p']==$pages):?><a href="#">Next &rarr;</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']+1;?>&<?php echo $clean_query_string;?>">Next &rarr;</a><?php endif;?></li>
            <?php endif;?>
 
            <?php if($current_page > 5 && $current_page < $pages-5):?>
            <li class="prev <?php if($_GET['p']==1 || !isset($_GET['p'])):?>disabled<?php endif;?>"><?php if($_GET['p']==1 || !isset($_GET['p'])):?><a href="#">&larr; Previous</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']-1;?>&<?php echo $clean_query_string;?>">&larr; Previous</a><?php endif;?></li>
            <?php if($current_page>=7):?>
            <li class=""><a href="temp.php?p=1&<?php echo $clean_query_string;?>">1</a></li>
            <li class=""><a href="#">...</a></li>
            <?php endif;?>
            <?php for($i=$current_page-5;$i<=$current_page+5;$i++):?>
            <li class="<?php if($i==$_GET['p']) echo "active";?>"><?php if($i!=$_GET['p']):?><a href="temp.php?p=<?php echo $i;?>&<?php echo $clean_query_string;?>"><?php echo $i;?></a><?php else:?><a href="#"><?php echo $i;?></a><?php endif;?></li>
            <?php endfor;?>
            <?php if($current_page<=$pages-6):?>
            <li class=""><a href="#">...</a></li>
            <li class=""><a href="temp.php?p=<?php echo $pages;?>&<?php echo $clean_query_string;?>"><?php echo $pages;?></a></li>
            <?php endif;?>
            <li class="next <?php if($_GET['p']==$pages):?>disabled<?php endif;?>"><?php if($_GET['p']==$pages):?><a href="#">Next &rarr;</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']+1;?>&<?php echo $clean_query_string;?>">Next &rarr;</a><?php endif;?></li>
            <?php endif;?>
 
            <?php if($current_page >= $pages-5):?>
            <li class="prev <?php if($_GET['p']==1 || !isset($_GET['p'])):?>disabled<?php endif;?>"><?php if($_GET['p']==1 || !isset($_GET['p'])):?><a href="#">&larr; Previous</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']-1;?>&<?php echo $clean_query_string;?>">&larr; Previous</a><?php endif;?></li>
            <li class=""><a href="temp.php?p=1&<?php echo $clean_query_string;?>">1</a></li>
            <li class=""><a href="#">...</a></li>
            <?php for($i=$current_page-5;$i<=$pages;$i++):?>
            <li class="<?php if($i==$_GET['p']) echo "active";?>"><?php if($i!=$_GET['p']):?><a href="temp.php?p=<?php echo $i;?>&<?php echo $clean_query_string;?>"><?php echo $i;?></a><?php else:?><a href="#"><?php echo $i;?></a><?php endif;?></li>
            <?php endfor;?>
            <li class="next <?php if($_GET['p']==$pages):?>disabled<?php endif;?>"><?php if($_GET['p']==$pages):?><a href="#">Next &rarr;</a><?php else:?><a href="temp.php?p=<?php echo $_GET['p']+1;?>&<?php echo $clean_query_string;?>">Next &rarr;</a><?php endif;?></li>
            <?php endif;?>
 
        <?php endif;?>
    </ul>
</div>
<?php endif;?>
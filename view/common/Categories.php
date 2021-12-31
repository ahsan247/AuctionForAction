<div class="col-md-3">
	<div class="list-group">
		<a class="list-group-item"><h2>Current Campaign</h2></a>

        <?php
		 $menu;
		 function buildMenu($parent, $menu) {
			 $html = "";
 
			 foreach ($menu['parents'][$parent] as $itemId) {
				 if (!isset($menu['parents'][$itemId])) {
					 $html .= "<a href='products.php?op=list&cat=" . $menu['items'][$itemId]['id'] . "' class='list-group-item' style='font-size:20px'><span class='label label-success'>" . $itemId . "</span><span> &nbsp; &nbsp; </span>" . $menu['items'][$itemId]['label'] . "</a>";
				 }
				 if (isset($menu['parents'][$itemId])) {
					 $html .= "
              <a href='products.php?op=list&cat=" . $menu['items'][$itemId]['id'] . "' class='list-group-item'><span class='badge'>" . $itemId . "</span>" . $menu['items'][$itemId]['label'] . "</a>";
					 $html .= buildMenu($itemId, $menu);
 
				 }
			 }
 
			 return $html;
		 }
 
		 echo buildMenu(0, $menu);
		?>                
	</div>
</div>
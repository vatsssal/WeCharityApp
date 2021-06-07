<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="../index/index.php"><img src="../img/logo.png" style="width:125%"alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/index/index.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a href="../index/index.php"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>

        </li>
        <li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/charity/add_charity.php' OR $active=='/wecharity/admin/charity/manage_charity.php' OR$active=='/wecharity/admin/charity/add_charity_type.php' OR$active=='/wecharity/admin/charity/manage_charity_type.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <i class="fas fa-hand-holding-heart"></i>
            <span>Charity</span>
          </a>
          <ul>
				<li><a href="../charity/add_charity.php" class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/charity/add_charity.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp;&nbsp; Add Charity</a></li>
                <li><a href="../charity/manage_charity.php"class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/charity/manage_charity.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp;&nbsp; Manage Charity</a></li>
                <li><a href="../charity/add_charity_type.php"class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/charity/add_charity_type.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbsp Add Charity Type</a></li>
				<li><a href="../charity/manage_charity_type.php"class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/charity/manage_charity_type.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbsp Manage Charity Type</a></li>
          </ul>
        </li>

        <li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/users/manage_users.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>Patrons</span>
          </a>
          <ul>
                <li><a href="../users/manage_users.php" class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/users/manage_users.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbsp Manage Patrons</a></li>
				</ul>
		</li>
		<li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/transactions/manage_transactions.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a   class="has-arrow" href="#" aria-expanded="false">
		  <i class="fas fa-rupee-sign"></i>
            <span>Transactions</span>
          </a>
          <ul>
                <li><a href="../transactions/manage_transactions.php" class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/transactions/manage_transactions.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbsp Manage Transactions</a></li>
				</ul>
		</li>
        <li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/queries/manage_queries.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <i class="fas fa-file-signature"></i>
            <span>Queries</span>
          </a>
          <ul>
                <li><a href="../queries/manage_queries.php" class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/queries/manage_queries.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbsp Manage Queries</a></li>
				</ul>
		</li>
            
        <li class="<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/blogs/add_blogs.php' OR $active=='/wecharity/admin/blogs/manage_blogs.php')
				  {
					  echo 'mm-active';
					  }
				  ?>">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <i class="fas fa-th-large"></i>
            <span>Blogs</span>
          </a>
          <ul>
            <li><a href="../blogs/add_blogs.php"class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/blogs/add_blogs.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbspAdd Blogs</a></li>
                <li><a href="../blogs/manage_blogs.php" class="
				<?php $active=$_SERVER['REQUEST_URI'];
				  if($active=='/wecharity/admin/blogs/manage_blogs.php')
				  {
					  echo 'active';
					  }
				  ?>">&nbsp&nbspManage Blogs</a></li>
				</ul>
            </li>
            
          
        </li>


        
       
        <li>
          <a href="../logout.php" aria-expanded="false">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>

      </ul>
    
</nav>
<!-- sidebar part end -->
 <!--/ sidebar  -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Scintin</a>
          
<!--          <form class="navbar-search" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>-->
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Users', 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->isGuest), 
                        array('label'=>'Classes', 'url'=>array('/schoolclass/index'), 'visible'=>!Yii::app()->user->isGuest),
//                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<?php if(Yii::app()->user->name==="Manideep"){ ?>
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        	<div class="style-switcher pull-left">
          	<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'anti-padding'),
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'<span class="style" style="background-color:#0088CC;"></span>', 'url'=>array('/site/styleswitcher','style'=>'blue')),
                        array('label'=>'<span class="style" style="background-color:#7c5706;"></span>', 'url'=>array('/site/styleswitcher','style'=>'brown')),
                        array('label'=>'<span class="style" style="background-color:#468847;"></span>', 'url'=>array('/site/styleswitcher','style'=>'green')),
                        array('label'=>'<span class="style" style="background-color:#4e4e4e;"></span>', 'url'=>array('/site/styleswitcher','style'=>'grey')),
                        array('label'=>'<span class="style" style="background-color:#d85515;"></span>', 'url'=>array('/site/styleswitcher','style'=>'orange')),
                        array('label'=>'<span class="style" style="background-color:#a00a69;"></span>', 'url'=>array('/site/styleswitcher','style'=>'purple')),
                        array('label'=>'<span class="style" style="background-color:#a30c22;"></span>', 'url'=>array('/site/styleswitcher','style'=>'red')),
                    ),
                )); ?>
                </div>
           
    	</div> <!-- container -->
    </div> <!-- navbar-inner --> 
</div> <!-- subnav -->
<?php } ?>
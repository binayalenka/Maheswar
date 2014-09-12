<style>
    form li span{
        width:100%;
    }
    tr.mceLast{
        display:none;
    }
</style>
<div id="sub-nav">
    <div class="page-title">
        <h1>Add New Game</h1>
    </div>
</div>

<div id="page-layout">
    <div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">
            <div class="inner-page-title">
                <h2>Add New Game</h2>
                <span></span>
            </div>
            <?php if($this->Session->check('success')){ ?>
                <div class="success ui-corner-all successdeveloperClass" id="success">
                    <span class='successMessageText'>
                        <?php echo $this->Session->read('success');?>
                    </span>
                </div>
                <?php $this->Session->delete('success'); ?>
            <?php } ?>

            <div class="content-box content-box-header" style="border:none;">
                <div class="column-content-box">
                    <div class="ui-state-default ui-corner-top ui-box-header"> </div>

                    <div id="tabs"> 
                     <?php echo $this->Form->create('AddNewGame',array('id'=>'AddGame','url'=>array('controller'=>'games','action'=>'add_game'),'type' => 'file')); ?>
                        <div id="tabs1">
                            <div class="content-box-wrapper">
                                <fieldset>
                                    <ul>
                                        <li>
                                            <label class="desc" >Name</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamename',array('type'=>'text','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 
                                                <p class="tutor-add-Error" id="err_gamename"><?php if(isset($error['gamename'][0])) echo $error['gamename'][0]; ?>  </p>   
                                            </div>
                                        </li>   
                                        <li>
                                            <label class="desc" >Image</label>
                                            <div>
                                            	<?php echo $this->Form->input('gameimage',array('type'=>'file','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 

                                                <p class="tutor-add-Error" id="err_gameimage"><?php if(isset($error['gameimage'][0])) echo $error['gameimage'][0]; ?>  </p>   
                                            </div>
                                        </li>  

                                        <li>
                                            <label class="desc" >File</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamefile',array('type'=>'file','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 

                                                <p class="tutor-add-Error" id="err_gamefile"><?php if(isset($error['gamefile'][0])) echo $error['gamefile'][0]; ?>  </p>   
                                            </div>
                                        </li>  
                                        <li>
                                            <label class="desc" >Code</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamecode',array('type'=>'textarea','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 

                                                <p class="tutor-add-Error" id="err_gamecode"><?php if(isset($error['gamecode'][0])) echo $error['gamecode'][0]; ?>  </p>   
                                            </div>
                                        </li> 
                                        <li>
                                            <label class="desc" >Description</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamedescription',array('type'=>'textarea','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 

                                                <p class="tutor-add-Error" id="err_gamedescription"><?php if(isset($error['gamedescription'][0])) echo $error['gamedescription'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                        <li>
                                            <label class="desc" >Instruction</label>
                                            <div>
                                            	<?php echo $this->Form->input('gameinstruction',array('type'=>'textarea','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 

                                                <p class="tutor-add-Error" id="err_gameinstruction"><?php if(isset($error['gameinstruction'][0])) echo $error['gameinstruction'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                         <li>
                                            <label class="desc" >Tag</label>
                                            <div>
                                            	<?php echo $this->Form->input('gametag',array('type'=>'select','div'=>false,'label'=>false,'multiple' => true,'class'=>'text full field required','options'=>array('action'=>'Action','adventure'=>'Adventure','alien'=>'Alien','android'=>'Android','army'=>'Army'))); ?> 
                                                <p class="tutor-add-Error" id="err_gametag"><?php if(isset($error['gametag'][0])) echo $error['gametag'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                        <li>
                                            <label class="desc" >Category</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamecategory',array('type'=>'select','div'=>false,'label'=>false,'multiple' => true,'class'=>'text full field required','options'=>array('1'=>'Free','2'=>'New','3'=>'Best','4'=>'Top','5'=>'Popular'))); ?> 
                                                <p class="tutor-add-Error" id="err_gamecategory"><?php if(isset($error['gamecategory'][0])) echo $error['gamecategory'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                         <li>
                                            <label class="desc" >Series</label>
                                            <div>
                                            	<?php echo $this->Form->input('gameseries',array('type'=>'text','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 
                                                <p class="tutor-add-Error" id="err_gameseries"><?php if(isset($error['gameseries'][0])) echo $error['gameseries'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                        <li>
                                            <label class="desc" >Size</label>
                                            <div>
                                            	<?php echo $this->Form->input('gamesize',array('type'=>'text','div'=>false,'label'=>false,'class'=>'text full field required')); ?> 
                                                <p class="tutor-add-Error" id="err_gamesize"><?php if(isset($error['gamesize'][0])) echo $error['gamesize'][0]; ?>  </p>   
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <input class="sub-bttn" type="submit" value="Submit" onclick='return ajax_form("UserName", "Users/validate_username_ajax", "newloading")'/>
                                            <div class="newloading">
                                                <?php echo $this->Html->image('front/wait.gif',array('height'=>'32px'));?>
                                            </div> 

                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
				<?php echo $this->Form->end(); ?>
                    </div>
                   
                </div>
                <div class="clearfix"></div>
                <div id="sidebar"></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
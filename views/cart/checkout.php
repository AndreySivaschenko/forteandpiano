<?php
	include ROOT.'/views/layouts/header.php';
?>
		<div class="middle center clearfix">
				<?php include ROOT.'/views/layouts/sidebar.php';?>
				<div class="content">
                  
                   <div class="conteners">
                   <div class="b1" style="height:800px;">
                       <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>
                   </div>
                        <div class="block_checkout" style="width:305px;height:850px;margin:30px auto;">
                       
                          <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br/>

                        <?php if (!$result): ?>                        
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
                        <form method="POST" action="#"> 
                            <div class="checkout_cart">
                                <label for="userName">Имя</label>
                                <input type="text" name="userName" id="pass" value="<?php echo $userName; ?>">
                            </div>
                            <div class="checkout_cart">
                                <label for="userCity">Город</label>
                                <input type="text" name="userCity" id="pass" value="<?php echo $userCity; ?>">
                            </div>
                            <div class="checkout_cart">
                                <label for="userAddress">Адрес</label>
                                <input type="text" name="userAddress" id="pass" value="<?php echo $userAddress; ?>">
                            </div>
                            <div class="checkout_cart">
                                <label for="userPhone">Телефон</label>
                                <input type="text" name="userPhone" id="pass" value="<?php echo $userPhone; ?>">
                            </div>
                            <div class="checkout_cart" style="text-align:left;">
                                <label for="userComment">Комментарий</label>
                                 <textarea name="userComment" id="comm"value="<?php echo $userComment; ?>" ></textarea>
                            </div>
                             <div class="chk_btn">
                                 <input type="submit" name="submit" value="Отправить">
                            </div>
                            </form>
                        </div>
                   </div>
				</div><!--Content-->
			</div><!--Middle-->
               <?php endif; ?>
         <?php endif; ?>
		</div><!--Wrapper-->
		<?php include ROOT.'/views/layouts/footer.php';?>
		












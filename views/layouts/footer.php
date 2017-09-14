		<footer>
			<div id="site_name">
				<span>Project</span> - Проект Роман
			</div>
			<div id="clear"></div>
			<div id="footer_menu">
				<a href="/ad/" title="Узнать детальнее про рекламу">Реклама</a>
				<a href="/contacts/" title="Наисать письмо">Обратная связь</a>
			</div>
			<div id="rights">
				<a href="">Все права защищены &copy; <?=date ('Y')?></a>
			</div>
			<div id="social">
				<a href="https://vk.com/proglib" title="Группа Вк"><i class="fa fa-vk" aria-hidden="true"></i>
</a>
				<a href="https://www.facebook.com/" title="Группа FaceBook"><i class="fa fa-facebook" aria-hidden="true"></i>
</a>
				<a href="https://www.youtube.com/channel/UCpb7cGnv0loLXzh10sKbbMg" title="Канал на YouTube"><i class="fa fa-youtube" aria-hidden="true"></i>
</a>
				<a href="https://twitter.com/" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>

</a>
			</div>
		</footer>
		<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
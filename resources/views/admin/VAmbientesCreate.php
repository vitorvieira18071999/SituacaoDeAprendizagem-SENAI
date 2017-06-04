<h1 class="simple-title">Cadastro de Ambientes</h1>
<hr>
<div>
	<a href="" class="button button--warning">Voltar</a>
	<hr>
	<form  class="form mt--15" method="post">
		<div class="form__section">
			<span class="pr--10 pl--10">
				<input type="checkbox" value="1" id="active" name="active" checked=""> 
				<label for="active">Ativo</label>
			</span>
			<span class="pr--10 pl--10">
				<input type="checkbox" value="1" id="featured" name="featured"> 
				<label for="featured">Destaque</label>
			</span>
		</div>
		<div class="form__section">
			<label for="name" class="label">Nome</label>
			<input name="name" required id="name" type="text" class="input" placeholder="Nome">
		</div>
		<div class="form__section">
			<label for="description" class="label">Descrição</label>
			<textarea name="description" id="description" type="text" class="input" placeholder="Descrição"></textarea>
		</div>
		<div class="form__section">
			<div class="row">
				<div class="col-6">
					<label for="capacity" class="label">Capacidade</label>
					<input name="capacity" min="0" id="capacity" type="number" class="input" placeholder="Capacidade">
				</div>
				<div class="col-6">
					<label for="size" class="label">Metros quadrados</label>
					<input name="size" id="size" type="number" class="input" placeholder="Metros quadrados">
				</div>
			</div>
		</div>
		<div class="form__section">
			<label type="button" class="button button--primary">Imagem principal</label>
			<label type="button" class="button button--primary">Cadastrar imagem</label>
			<label type="button" class="button button--primary">Cadastrar vídeo</label>
		</div>
		<div class="form__section">
			<button class="button button--success">Salvar</button>
		</div>
	</form>
</div>
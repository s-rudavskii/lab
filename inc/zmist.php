<h1>Форматування <span>змісту</span>
  <small>Використовується для форматування зміту,
    вирізає номери сторінок та забирає усі непотрібні символи</small></h1>
<div class="btn-toolbar">
  <div class="btn-group left25" data-toggle="buttons-checkbox">
    <button type="button" id="btn-0" class="btn active"
            title="Знімає перенесення стрічки якщо перший символ в стрічці нижнього реєстру">
      Перенесення стрічок</button>
    <button type="button" id="btn-1" class="btn"
            title="Видаляє усі цифри в кінці стрічки (не рекомендується)">
      Форс видалення</button>
    <button type="button" id="btn-2" class="btn"
            title="Перша буква в кожній стрічці буде замінена на аналогічну у великому реєстрі">
      Перше слово з великої літери</button>
  </div>
  <button type="button" id="copy" style="width: 100px;" class="btn btn-primary"
          title="Копіювати у буфер обміну">
    В буфер</button>
  <div class="input-append" style="margin-left: 5px; margin-top: 10px;">
    <input class="span2" id="title" type="text"
           title="Спеціально для маленької Лисички ^_^"
           placeholder="Назва книги">
    <button class="btn" type="button" onclick="z_xml()"
            title="Спеціально для маленької Лисички ^_^">XML</button>
  </div>
</div>
<div class="left25 top25">
  <textarea id="source" cols="30" rows="10"></textarea>
  <textarea id="target" cols="30" rows="10"></textarea>
</div>
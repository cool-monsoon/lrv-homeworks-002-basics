<link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" rel="stylesheet">

<div class="d-flex flex-column align-items-center">
<h3 class="text-center mt-4">
    Добавить студента в группу: {{ $group->title }}
</h3>

<form action="{{ route('groups.students.store', $group) }}" method="POST" class="d-flex flex-column align-items-center">
    @csrf

    <div>
        <label for="surname" class="col-form-label mt-4">Фамилия:</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия">
    </div>

    <div>
        <label for="name" class="col-form-label mt-4">Имя:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
    </div>

    <button class="btn btn-outline-success mt-4" type="submit">Добавить студента</button>
</form>

<footer class="footer">
    <a class="btn btn-outline-success mt-4" href=" {{ route('groups.index') }} ">Вернуться к списку групп</a>
</footer>
</div>



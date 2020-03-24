<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Апартаменты</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
    <div class="form container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                <h2>Выбирете необходимые параметры:</h2>
                <form method="post" name="filter">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="name" class=col-form-label">Название апартамента:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="bedrooms" class=col-form-label">Количество спален:</label>
                            <select class="form-control" id="bedrooms" name="bedrooms">
                                <option>--Выберите--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="bathrooms" class=col-form-label">Количество ванных комнат:</label>
                            <select class="form-control" id="bathrooms" name="bathrooms">
                                <option>--Выберите--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="storeys" class=col-form-label">Количество этажей:</label>
                            <select class="form-control" id="storeys" name="storeys">
                                <option>--Выберите--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="garages" class=col-form-label">Количество гаражей:</label>
                            <select class="form-control" id="garages" name="garages">
                                <option>--Выберите--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class=col-form-label">Цена:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="from" placeholder="от">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="to" placeholder="до">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Показать результаты</button>
                </form>
            </div>
        </div>
    </div>
    <div class="result container">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table__hidden" id="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Количество спален</th>
                            <th scope="col">Количество ванных комнат</th>
                            <th scope="col">Количество этажей</th>
                            <th scope="col">Количество гаражей</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>56457567</td>
                            <td>5</td>
                            <td>2</td>
                            <td>1</td>
                            <td>7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="empty_response"></div>
            </div>
        </div>
    </div>
    <script src="js/custom.js" charset="utf-8"></script>
    </body>
</html>

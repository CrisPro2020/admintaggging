@extends('layouts.plantilla')

@section('title', 'Categorías')

@section('title-content', '¡Creemos una categoría!')

@section('description-content', 'Crea. edita o elimina la categoría que sea necesaria')

@section('contenido')
    <h2 class="subtitle">Añade una nueva categoría</h2>

    <div class="content-form-show">
        <div>
            <form>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="input-n" placeholder="Introduce el nombre de la categoría">
                    <p>Ésta es la palabra que se visualizará en tu sitio</p>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="input-n" placeholder="Introduce el slug">
                    <p>El “slug” es la palabra que se pondrá en la URL. Por lo general siempre va en minúsculas, solo letras, números y guiones.</p>
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea name="" class="description" placeholder="Puedes o no introducir una breve descripción"></textarea>
                </div>
                <input type="submit" value="Añadir categoría" class="input-submit">
            </form>
        </div>
        <div>
            <table>
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-primary uppercase tracking-wider">
                      Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-primary uppercase tracking-wider">
                      Slug
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-primary uppercase tracking-wider">
                      Descripción
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-primary uppercase tracking-wider">
                      Acciones
                    </th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Marketing Online</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Esto es una descripcion breve</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <span class="text-sm text-black">marketing-online</span>
                        </td>
                        <td class="whitespace-nowrap actions">
                            <div class="flex justify-end items-center">
                                <a href="#" class="btn btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                                <a href="#" class="btn btn-delete">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">SEO</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Esto es una descripcion breve</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <span class="text-sm text-black">seo</span>
                        </td>
                        <td class="whitespace-nowrap actions">
                            <div class="flex justify-end items-center">
                                <a href="#" class="btn btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                                <a href="#" class="btn btn-delete">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Marketing Online</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Esto es una descripcion breve</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <span class="text-sm text-black">marketing-online</span>
                        </td>
                        <td class="whitespace-nowrap actions">
                            <div class="flex justify-end items-center">
                                <a href="#" class="btn btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                                <a href="#" class="btn btn-delete">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Marketing Online</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <p class="text-sm text-black">Esto es una descripcion breve</p>
                        </td>
                        <td class="whitespace-nowrap">
                            <span class="text-sm text-black">marketing-online</span>
                        </td>
                        <td class="whitespace-nowrap actions">
                            <div class="flex justify-end items-center">
                                <a href="#" class="btn btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                                <a href="#" class="btn btn-delete">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>
      
                  <!-- More items... -->
                </tbody>
              </table>
        </div>
    </div>

    <form action="#"></form>
@endsection
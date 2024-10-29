<p>
    @lang("Displaing all the values of :module_name (Id: :id)", ['module_name'=>ucwords(__($module_name_singular)), 'id'=>$$module_name_singular->id]).
</p>
<table class="table table-responsive-sm table-hover table-bordered">

    <?php
        $all_columns = $$module_name_singular->getTableColumns();
    ?>
  <thead>
      <tr>
          <th scope="col">
              <strong>
                  @lang('Name')
              </strong>
          </th>
          <th scope="col">
              <strong>
                  @lang('Value')
              </strong>
          </th>
      </tr>
  </thead>
  <tbody>
      @foreach ($all_columns as $column)
      @if(show_column_value($$module_name_singular, $column))
      <tr>
          <td>
              <strong>
                  {{ label_case($column->Field) }}
              </strong>
          </td>
          <td>
              {!! show_column_value($$module_name_singular, $column) !!}
          </td>
      </tr>
      @endif
      @endforeach
      @if(!empty($$module_name_singular->user->name))
      <tr>
          <td>
              <strong>
                  Name by Update
              </strong>
          </td>
          <td>
              {{$$module_name_singular->user->name}}
          </td>
      </tr>
      @endif
  </tbody>

</table>

<!-- Lightbox2 Library -->
<x-library.lightbox/>

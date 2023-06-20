<table class="table table-hover table-striped">
    <tr>
        <th>Loại kết nối</th>
        <td>{{$specMouse->Interface}}</td>
    </tr>
    <tr>
        <th>Mắt đọc</th>
        <td>{{$specMouse->Sensor}}</td>
    </tr>
    <tr>
        <th>DPI</th>
        <td>{{$specMouse->DPI}}</td>
    </tr>
    <tr>
        <th>Chất liệu vỏ</th>
        <td>{{$specMouse->Materials}}</td>
    </tr>
    <tr>
        <th>Số lượng nút</th>
        <td>{{$specMouse->Number_Of_Buttons}}</td>
    </tr>  
    <tr>
        <th>Switch</th>
        <td>{{$specMouse->Switch}}</td>
    </tr> 
    <tr>
        <th>Trọng lượng</th>
        <td>{{$specMouse->Weight}}</td>
    </tr> 
    <tr>
        <th>Kích thước</th>
        <td>{{$specMouse->Dimensions}}</td>
    </tr>                    
</table>

{{-- {{dd(url()->full())}} --}}

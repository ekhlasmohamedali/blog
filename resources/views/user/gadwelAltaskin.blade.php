@extends('layouts.user')
@section('title','جدول التسكين')
@section('content')
<table class="yy">
            <thead>
                <tr>
                    <th> الفرقة</th>
                    <th>اليوم</th>
                    <th>التاريخ</th>
                   
                    <th>التقدير</th>
                </tr>
                 
                
            </thead>
            <tbody >
                
                 <tr>
                    <td rowspan="2">الفرقة الخامسة</td>
                    <td>السبت  </td>
                      <td>21/9</td>
                    <td> امتياز </td>
                 </tr>
                  <tr>
                   
                    <td>الأحدا</td>
                    <td>22/9</td>
                     <td>جيد جدا</td>
                 </tr>
                   <tr>
                    <td rowspan="2">الفرقة الرابعة</td>
                    <td>الثلاثاء </td>
                      <td>23/9</td>
                    <td> امتياز </td>
                 </tr>
                  <tr>
                   
                    <td>الأربعاء</td>
                    <td>24/9</td>
                     <td>جيد جدا</td>
                 </tr>
                   <tr>
                    <td rowspan="2">الفرقة الثالثة</td>
                    <td>الخميس</td>
                      <td>25/9</td>
                    <td> امتياز </td>
                 </tr>
                  <tr>
                  
                    <td>السبت</td>
                    <td>27/9</td>
                     <td>جيد جدا</td>
                 </tr>
                  <tr>
                    <td rowspan="2">الفرقة الثانية</td>
                    <td>الأحد</td>
                      <td>28/9</td>
                    <td> امتياز </td>
                 </tr>
                  <tr>
                    
                    <td>الاتنين</td>
                    <td>29/9</td>
                     <td>جيد جدا</td>
                 </tr>
                  
                <tr>
                    <td >الفرقة الأولى بعد اعدادي</td>
                    <td>الثلاثاء</td>
                      <td>30/9</td>
                    <td> امتياز & جيدجدا  </td>
                 </tr>
                <tr>
                    <td >المتخلفات عن ميعاد التقديم</td>
                    <td>الأربعاء</td>
                      <td>1/10</td>
                    <td> امتياز & جيدجدا  </td>
                 </tr>
                 <tr>
                    <td >الكوارس وذوي الاحتياجات الخاصة</td>
                    <td>الخميس</td>
                      <td>2/10</td>
                      <td></td>
                    
                 </tr>
            </tbody>
            <tfoot >
                <tr>
                    <td colspan="4">جدول تسكين الطلاب القدامى</td>
                </tr>
            </tfoot>
        </table>
        
        <table class="rr">
            <thead>
                <tr>
                    <th> الفرقة</th>
                    <th>اليوم</th>
                    <th>التاريخ</th>
                   
                    
                </tr>
                 
                
            </thead>
            <tbody >
                
                 <tr>
                    <td rowspan="3">الفرقة الأولى</td>
                    <td>السبت  </td>
                      <td>1/12</td>
                    
                 </tr>
                  <tr>
                   
                    <td>الأحدا</td>
                    <td>2/12</td>
                     
                 </tr>
                   <tr>
                   
                    <td>الاثنين </td>
                      <td>3/12</td>
                    
                 </tr>
            </tbody>
             <tfoot >
                <tr>
                    <td colspan="3">جدول تسكين الطلاب المستحدثين</td>
                </tr>
            </tfoot>
                  
                   
@endsection
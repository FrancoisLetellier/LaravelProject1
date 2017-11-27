@extends('layouts.template')
@extends('layouts.navbar')

@section('content')
    <div id="global_form">
        <h2>Isdea : Projet le dingue malade</h2>
        <div class="tab_container justify-content-center">
            {{--<div>{{ $form->id }}</div>--}}
            <input id="tab1" type="radio" name="tabs" class="forms_input" value="0" checked>
            <label for="tab1" class="forms_label"><span>@lang('form.identity')</span></label>

            <input id="tab2" type="radio" name="tabs" value="1" class="forms_input">
            <label for="tab2" class="forms_label"><span>@lang('form.completeness')</span></label>

            <input id="tab3" type="radio" name="tabs" value="2" class="forms_input">
            <label for="tab3" class="forms_label"><span>@lang('form.analysis')</span></label>

            <input id="tab4" type="radio" name="tabs" value="3"  class="forms_input">
            <label for="tab4" class="forms_label"><span>@lang('form.analysis.criterias')</span></label>

            <input id="tab5" type="radio" name="tabs" value="4"  class="forms_input">
            <label for="tab5" class="forms_label"><span>@lang('form.analysis.areas')</span></label>

            <input id="tab6" type="radio" name="tabs" value="5"  class="forms_input">
            <label for="tab6" class="forms_label"><span>@lang('form.analysis.areas')</span></label>

            <input id="tab7" type="radio" name="tabs" value="6" class="forms_input">
            <label for="tab7" class="forms_label"><span>@lang('form.synthesis')</span></label>
            @include('form.sections.section1')
            @include('form.sections.section2')
            @include('form.sections.section3')
            @include('form.sections.section4')
            @include('form.sections.section5')
            @include('form.sections.section6')
            @include('form.sections.section7')
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($faq) ? 'تعديل سؤال' : 'اضافة سؤال'}}
        </div>
        <div class="card-body">
            <form action="{{  isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store')  }}"
                  method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($faq))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="question">السؤال</label>
                    <input type="text" name="question" id="question" class="form-control"
                           value="{{ isset($faq) ? $faq->question : '' }}">
                    @if($errors->has('question'))
                        <span class="text-danger font-weight-bold">* {{$errors->first('question')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="answer">الاجابة</label>
                    <textarea id="answer" name="answer" class="form-control"
                              class="">{{ isset($faq) ? $faq->answer : '' }}</textarea>
                    @if($errors->has('answer'))
                        <span class="text-danger font-weight-bold">* {{$errors->first('answer')}}</span>
                    @endif
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button class="primary-btn transition"
                            data-text="{{ isset($faq) ? 'تحديث السؤال' : 'رفع السؤال' }}">
                        <span>
                            {{ isset($faq) ? 'تحديث السؤال' : 'رفع السؤال' }}
                        </span>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection

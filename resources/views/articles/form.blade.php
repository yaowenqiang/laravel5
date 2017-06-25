{!! Form::hidden('user_id',1) !!}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','Publish On:') !!}
    {{--           {!! Form::date('date',date('Y-m-d'),['class'=>'form-control']) !!}--}}
    {!! Form::date('published_at',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
@section('footer')
<script type="text/javascript">
    $(document).ready(function() {
        $("#tag_list").select2({
            placeholder:"Choose a tag.",
            tags:true,
//                ajax: {
//                    dataType: 'json',
//                    url: 'tags.json',
//                    processResults: function (data) {
//                        return {
//                            results:data
//                        }
//                    }
//                }
//            data:[
//                {
//                    id:'one',text:'One'
//                },
//
//                {
//                    id:'two',text:'Two'
//                },
//                {
//                    id:'three',text:'Three'
//                },
//            ],
//            ajax: {
//                dataType:"json",
//                url:"",
//                delay:250,
//                data:function(params){
//                    return {
//                        q:params.tern
//                    }
//                },,
//                processResults: function(data){
//                   return {
//                       results:data.property
//                   }
//                }
//            }
        });
    });
</script>
@stop

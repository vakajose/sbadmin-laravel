<div class="panel panel-{{ $class or 'default' }}">
    @if (isset($panelTitle))
        <div class="panel-heading">
            <p class="panel-title">
                {{ $panelTitle}}
                @if (isset($panelControls))
                    <div class="panel-control pull-right">
                        <a class="panelButton"><i class="fa fa-refresh"></i></a>
                        <a class="panelButton"><i class="fa fa-arrow-circle-left"></i></a>
                        <a class="panelButton"><i class="fa fa-arrow-circle-right"></i></a>
                        <a class="panelButton"><i class="fa fa-minus"></i></a>
                        
                    </div>
                @endif
                @if(isset($panelCrudControls))
                    <div class="pull-left">
                        @include('admin.widgets.button', array('value'=>'Nuevo', 'class'=>'primary','size'=>'xs'))
                    </div>
                @endif
            </p>
        </div>
    @endif

    @if (isset($panelBody))
        <div class="panel-body">
            {{ $panelBody }}
        </div>
    @endif

    @if (isset($panelFooter))
        <div class="panel-footer">
            {{ $panelFooter }}
        </div>
    @endif
</div>


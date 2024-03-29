<div class="modal fade" id="keyboard-shortcuts-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
                <h5 class="modal-title">{{ trans('admin::admin.shortcuts.available_shortcuts') }}</h5>
            </div>

            <div class="modal-body">
                <dl class="dl-horizontal">
                    <dt><code>?</code></dt>
                    <dd>{{ trans('admin::admin.shortcuts.this_menu') }}</dd>
                </dl>

                @stack('shortcuts')
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <span>
            <strong>
                v{{ fleetcart_version() }}
            </strong>
        </span>
    </div>

    <a href="#" data-toggle="modal" data-target="#keyboard-shortcuts-modal">
        <i class="fa fa-keyboard-o"></i>
    </a>&nbsp;

    <span>
        Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}"
            target="_blank"><strong>{{ setting('store_name') }}</strong></a>
    </span>
</footer>

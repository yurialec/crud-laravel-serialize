@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<div class="demo">
    <p><strong>Input</strong></p>
    <div class="control-group">
        <label for="input-tags">Tags:</label>
        <input type="text" id="input-tags" class="demo-default" value="">
    </div>
</div>
<script type="text/javascript" src="selectize.js"></script>
<script>
    $('#input-tags').selectize({
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });
</script>

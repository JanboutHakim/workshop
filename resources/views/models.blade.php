<!DOCTYPE html>
<html>
    <body>
        @if ($designs)
            <h1>
                no designs avilable
            </h1>
        @else
            @foreach ($designs as $design)
                {{
                    $design->name
                }}
            @endforeach
        @endif
    </body>
</html>
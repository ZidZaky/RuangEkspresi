<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Inter';
            margin: 0;
            padding: 0;



            .preview {
                width: auto;
                height: fit-content;

                .preview-body {
                    background-color: var(--bg);
                    height: fit-content;
                }

            }

            .menu {
                width: auto;
                height: fit-content;
                border: var(--line);

                a:hover {
                    color: var(--accent);
                    background-color: var(--bg);
                }
            }
        }
    </style>
</head>

<body>
    @include('read.calendar')

    <div class="preview mb-3 rounded-3 p-3 bg-white border border-secondary border-opacity-25">
        <div class="preview-body p-3 rounded items-center d-flex flex-column align-items-center text-center rounded-3">
            <img src="/assets/images/profile.png" alt="" class="mb-2" style="height:48px">
            <h6 class="m-0 fw-medium" style="font-family: 'Inter';">Kevin Aluminium</h6>
            <small class="text-secondary p-0 m-0 fst-italic fw-light" style="font-size: 14px;">@Kevin_Aluminium</small>
        </div>
    </div>
    <div class="menu d-flex flex-column rounded border border-secondary border-opacity-25 gap-1 bg-white p-3">
        <a href="/dashboard" class="text-secondary rounded-2 text-decoration-none d-flex align-items-center gap-3 px-3 py-2"><i class="fi fi-rr-home d-flex"></i>Home</a>
        <hr class="m-0 border border-secondary border-opacity-25">
        <a type="button" class="text-secondary rounded-3 text-decoration-none d-flex align-items-center gap-3 px-3 py-2" data-bs-toggle="modal" data-bs-target="#calendarModal"><i class="fi fi-rr-calendar-day d-flex"></i>Calender</a>
        <hr class="m-0 border border-secondary border-opacity-25">
        <a href="/komunitas" class="text-secondary rounded-3 text-decoration-none d-flex align-items-center gap-3 px-3 py-2"><i class="fi fi-rr-users"></i>Community</a>
    </div>
</body>

</html>
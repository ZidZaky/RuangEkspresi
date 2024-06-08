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

                h4 {
                    span {
                        color: var(--accent);
                    }
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

    <div class="preview mb-3 rounded-3 p-4 border border-secondary border-opacity-25 d-flex flex-column gap-3 bg-white">
        <h4 class="m-0 fw-semibold">Build <span>Meaningful</span> Relationships</h4>
        <p class="m-0 text-secondary ">Connect and grow with like minded people.</p>
    </div>

    <div class="menu d-flex flex-column rounded border border-secondary border-opacity-25 gap-1 bg-white p-3">
        <a href="/dashboard" class="text-secondary rounded-2 text-decoration-none d-flex align-items-center gap-3 px-3 py-2"><i class="fi fi-rr-home d-flex"></i>Home</a>
        <hr class="m-0 border border-secondary border-opacity-25">
        <a type="button" class="text-secondary rounded-2 text-decoration-none d-flex align-items-center gap-3 px-3 py-2" data-bs-toggle="modal" data-bs-target="#calendarModal"><i class="fi fi-rr-calendar-day d-flex"></i>Calender</a>
        <hr class="m-0 border border-secondary border-opacity-25">
        <a href="/komunitas" class="text-secondary rounded-2 text-decoration-none d-flex align-items-center gap-3 px-3 py-2"><i class="fi fi-rr-users"></i>Community</a>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;

            .preview {
                width: auto;
                height: fit-content;
                background-color: var(--white);
                /* border-radius: var(--br-sm); */
                padding: 16px;
                border: var(--line);

                .preview-body {
                    background-color: #f2f2f2;
                    height: fit-content;
                }

            }

            .menu {
                width: auto;
                height: fit-content;
                background-color: var(--white);
                padding: 16px;
                border: var(--line);

                .text-white {
                    background-color: var(--accent);
                }

                a {
                    display: flex;
                    padding: 12px 16px;
                    text-decoration: none;
                    gap: 12px;
                    align-items: center;

                    i {
                        display: flex;
                    }
                }
            }
        }
    </style>
</head>

<body>
    <div class="preview mb-3 rounded-3">
        <div class="preview-body p-3 rounded items-center d-flex flex-column align-items-center text-center rounded-3">
            <img src="/assets/images/profile.png" alt="" class="mb-2" style="height:52px">
            <h5 class="m-0">Kevin Aluminium</h5>
            <small class="text-secondary">@Kevin_Aluminium</small>
        </div>
    </div>
    <div class="menu d-flex flex-column rounded">
        <a href="" class="text-white active rounded-3"><i class="fi fi-rr-home"></i>Home</a>
        {{-- <a type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-calendar-day"></i>Event</a> --}}
        <a href="/event"><i class="fi fi-rr-calendar-day"></i>Event</a>
        <a type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#community"><i class="fi fi-rr-users"></i>Community</a>
    </div>
</body>

</html>
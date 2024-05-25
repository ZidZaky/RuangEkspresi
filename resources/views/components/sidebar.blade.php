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
                height: 100px;
                background-color: var(--white);
                margin-bottom: 12px;
                border-radius: var(--br-md);
                padding: 16px;

            }

            .menu {
                width: auto;
                height: fit-content;
                background-color: var(--white);
                border-radius: var(--br-md);
                padding: 16px;

                a {
                    display: flex;
                    padding: 12px 16px;
                    border-radius: var(--br-sm);
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
    <div class="preview">
        <p>Bingung guys</p>
    </div>
    <div class="menu d-flex flex-column ">
        <a href="" class="text-secondary"><i class="fi fi-rr-home"></i>Home</a>
        <a type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#karya"><i class="fi fi-rr-paint-brush"></i>Karya</a>
        <a type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-calendar-day"></i>Event</a>
        <a href="" class="text-secondary"><i class="fi fi-rr-users"></i>Community</a>
    </div>
</body>

</html>
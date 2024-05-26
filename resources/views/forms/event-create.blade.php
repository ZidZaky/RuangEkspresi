<style>
    .modal-backdrop {
        opacity: 0.1 !important;
    }

    .modal {
        .modal-dialog {
            .modal-content {
                .header-modal {
                    img {
                        height: 52px;
                    }
                }

                .modal-body {
                    form {

                        textarea,
                        input {
                            background-color: #f2f2f2;
                        }

                        button {
                            background-color: var(--accent);
                            width: 100%;
                        }
                    }
                }
            }
        }
    }
</style>

<!-- Modal Event -->
<div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form action="" method="post" class="d-flex flex-column gap-3">
                    <input type="text" name="" id="" placeholder="Event name" class="form-control">
                    <textarea name="" id="" placeholder="Description" rows="4" class="form-control"></textarea>
                    <div class="container d-flex gap-3 justify-content-between p-0 mb-2">
                        <input type="date" name="" id="" class="form-control">
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn p-2 d-block text-white">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
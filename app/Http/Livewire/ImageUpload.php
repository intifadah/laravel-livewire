<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var \Livewire\TemporaryUploadedFile[]
     */
    public $image = [];
    public $images = [];
    public $path_upload = 'public';

    public function mount()
    {
        $this->selectFiles();
    }

    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:4096', // 1MB Max
        ]);

        foreach ($this->image as $image) {
            $image->store($this->path_upload);
            // $image->storeAs('public', $image->getClientOriginalName());
        }
        $this->image = [];
        $this->selectFiles();
    }

    public function render()
    {
        return view('livewire.image-upload');
    }

    public function deleteFiles($filenama)
    {
        $isExist = Storage::disk($this->path_upload)->exists($filenama);
        if ($isExist)
            Storage::disk($this->path_upload)->delete($filenama);
        $this->selectFiles();
    }

    public function selectFiles()
    {
        $this->images = collect(Storage::files($this->path_upload))
            ->filter(function ($file) {
                return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']);
            })
            ->map(function ($file) {
                return Storage::url($file);
            });
    }
}

<?php

namespace App\Livewire;

use App\Models\CivilService;
use App\Models\ProfileInformation;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class CivilServiceList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $career_service;

    #[Rule('required|numeric')]
    public $rating;

    #[Rule('required|date')]
    public $examination_date;

    #[Rule('required|string')]
    public $examination_place;

    #[Rule('nullable|string')]
    public $license_number;

    #[Rule('nullable|date')]
    public $license_validity_date;

    public $civilService;



    public function render()
    {

        $pds = ProfileInformation::find($this->personalInformationId);
        $civilServices = $pds->civilService()->latest()->paginate(5);
        return view('livewire.civil-service-list', compact('civilServices'));
    }

    public function openForm()
    {
        $this->dispatch('open-civil-service-form-modal');
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date', 'civilService']);
    }

    public function createNewCivilService()
    {
        $data = $this->validate();
        // dd('hello world!');

        //store
        $civilService = new CivilService();
        $civilService->profile_information_id = $this->personalInformationId;
        $civilService->career_service = $data['career_service'];
        $civilService->rating = $data['rating'];
        $civilService->examination_date = $data['examination_date'];
        $civilService->examination_place = $data['examination_place'];
        $civilService->license_number = $data['license_number'];
        $civilService->license_validity_date = $data['license_validity_date'];
        $civilService->save();

        $this->dispatch('close-civil-service-form-modal');
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date', 'civilService']);
    }
    public function showCivilService(CivilService $civilService)
    {
        $this->resetValidation();
        $this->reset(['career_service', 'rating', 'examination_date', 'examination_place', 'license_number', 'license_validity_date', 'civilService']);
        $this->civilService = $civilService;
        $this->career_service = $civilService->career_service;
        $this->rating = $civilService->rating;
        $this->examination_date = $civilService->examination_date;
        $this->examination_place = $civilService->examination_place;
        $this->license_number = $civilService->license_number;
        $this->license_validity_date = $civilService->license_validity_date;
        $this->dispatch('open-civil-service-form-modal');
    }

    public function updateCivilService()
    {
        $data = $this->validate();
        $this->civilService->update($data);

        $this->dispatch('close-civil-service-form-modal');
    }
}

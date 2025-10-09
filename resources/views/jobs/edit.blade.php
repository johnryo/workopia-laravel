<x-layout>
  <x-slot name="title">Edit Job Listing</x-slot>
  <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
    <h2 class="text-4xl text-center font-bold mb-4">Edit Job Listing</h2>
    <form method="POST" action="{{route('jobs.update', $job->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">Job Info</h2>
      <x-inputs.text
        id="title"
        label="Job Title"
        name="title"
        :value="old('title', $job->title)"
        placeholder="Software Engineer"
      />
      <x-inputs.text-area
        id="description"
        label="Description"
        name="description"
        :value="old('description', $job->description)"
        placeholder="We are seeking a skilled and motivated Software Developer..."
      />
      <x-inputs.text
        id="salary"
        type="number"
        label="Salary"
        name="salary"
        :value="old('salary', $job->salary)"
        placeholder="90,000"
      />
      <x-inputs.text-area
        id="requirements"
        label="Requirements"
        name="requirements"
        :value="old('requirements', $job->requirements)"
        placeholder="Bachelor's degree in Computer Science"
      />
      <x-inputs.text-area
        id="benefits"
        label="Benefits"
        name="benefits"
        :value="old('benefits', $job->benefits)"
        placeholder="Health insurance, 401(k), paid time off"
      />
      <x-inputs.text
        id="tags"
        label="Tags (comma-separated)"
        name="tags"
        :value="old('tags', $job->tags)"
        placeholder="development, coding, java, python"
      />
      <x-inputs.select
        id="job_type"
        label="Job Type"
        name="job_type"
        :value="old('job_type', $job->type)"
        :options="['Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', 'Contract' => 'Contract', 'Temporary' => 'Temporary', 'Internship' => 'Internship', 'Volunteer' => 'Volunteer', 'On-Call' => 'On-Call']"
      />
      <x-inputs.select id="remote" label="Remote" name="remote" :value="old('remote', $job->remote)" :options="[0 => 'No', 1 => 'Yes']" />
      <x-inputs.text id="address" label="Address" name="address" :value="old('address', $job->address)" placeholder="123 Main St" />
      <x-inputs.text id="city" label="City" name="city" :value="old('city', $job->city)" placeholder="Albany" />
      <x-inputs.text id="state" label="State" name="state" :value="old('state', $job->state)" placeholder="NY" />
      <x-inputs.text id="zipcode" label="Zip Code" name="zipcode" :value="old('zipcode', $job->zipcode)" placeholder="02214" />

      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">Company Info</h2>
      <x-inputs.text
        id="company_name"
        label="Company Name"
        name="company_name"
        :value="old('company_name', $job->company_name)"
        placeholder="Enter Company Name"
      />
      <x-inputs.text-area
        id="company_description"
        label="Company Description"
        name="company_description"
        :value="old('company_description', $job->company_description)"
        placeholder="Enter Company Description"
      />
      <x-inputs.text
        id="company_website"
        type="url"
        label="Company Website"
        name="company_website"
        :value="old('company_website', $job->company_website)"
        placeholder="Enter Company Website"
      />
      <x-inputs.text
        id="contact_phone"
        name="contact_phone"
        label="Contact Phone"
        :value="old('contact_phone', $job->contact_phone)"
        placeholder="Enter Contact Phone"
      />
      <x-inputs.text
      id="contact_email"
      type="email"
      name="contact_email" label="Contact Email"
      :value="old('contact_email', $job->contact_email)"
      placeholder="Enter Contact Email"
    />
      <x-inputs.file id="company_logo" name="company_logo" label="Company Logo" />

      <button
        type="submit"
        class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
      >
        Save
      </button>
    </form>
  </div>
</x-layout>

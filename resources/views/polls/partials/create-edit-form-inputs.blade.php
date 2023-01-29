<div class="col-12">
    <label for="name" class="form-label">Question</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $poll->name) }}" required>
</div>

<div class="col-12">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{ old('description', $poll->description) }}</textarea>
</div>

<div class="col-md-6">
    <label for="start_date" class="form-label">Start Date</label>
    <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $poll->start_date) }}" required>
</div>

<div class="col-md-6">
    <label for="finish_date" class="form-label">Finish Date</label>
    <input type="datetime-local" class="form-control" id="finish_date" name="finish_date" value="{{ old('finish_date', $poll->finish_date) }}" required>
</div>

<hr class="text-secondary mt-4">

<div id="poll-options" class="col-12" x-data="{ 
    optionsNumber: {{ count($poll->options) ? $poll->options : 2 }},
    options: {{ count($poll->options) ? json_encode($poll->options) : json_encode([['option' => ''], ['option' => '']]) }},
    removeOption(id) {
        if (this.optionsNumber == 2) {
            alert('Each poll must have at least 2 options');
            return ;
        }
        this.options = this.options.filter(function(option){
            return option.id != id
        });
        this.optionsNumber = this.options.length
    },
    addOption(){
        this.options.push({id:Math.random()});
    }
}">
    <div class="row mb-5">
        <div class="col-6">
            <h4 class="float-start">Poll Options</h4>
        </div>
        <div class="col-6">
            <button x-on:click="addOption()" id="btn-add-poll-option" class="float-end btn btn-success" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                Add New Option
            </button>
        </div>
    </div>

    <template x-for="option,i in options">
        <div class="row">
            <div class="col-8">
                <input name="options[][option]" id="title" type="text" class="form-control mb-3" :placeholder="`Option ` + (i+1)" :value="option.option" required>
            </div>

            <div class="col-4">
                <button
                    x-on:click="removeOption(option.id)"
                    class="btn btn-danger" type="button">
                    Remove
                </button>
            </div>
        </div>
    </template>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-success">Save Poll</button>
</div>
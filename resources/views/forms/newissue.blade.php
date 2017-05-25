<!-- Modal -->
<div class="modal fade" id="new-issue-modal" tabindex="-1" role="dialog" aria-labelledby="new-issue-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form class="form" action="" method="get" accept-charset="utf-8">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="new-issue-label">Create New Issue</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="project">Project</label>
						<select name="project" class="form-control">
							<option value="test">test</option>
							<option value="test">test</option>
						</select>
					</div>
					<div class="form-group">
						<label for="issue-type">Issue Type</label>
						<select name="issue-type" id="issue-type" class="form-control">
							<option value="test">test</option>
							<option value="">test</option>
						</select>
					</div>
					<div class="form-group">
						<label for="summary">Summary</label>
						<input class="form-control" type="text" name="summary" value="" placeholder="Short description summary">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="priority">Priority</label>
						<select name="priority" id="priority" class="form-control">
							<option value="test">test</option>
							<option value="">test</option>
						</select>
					</div>
					<div class="form-group">
						<label for="summary">Attachment</label>
						<input type="file" name="attachment">
					</div>
					<div class="form-group">
						<label for="components">Components</label>
						<select name="components" id="components" class="form-control">
							<option value="test">test</option>
							<option value="">test</option>
						</select>
					</div>
					<div class="form-group">
						<label for="labels">Labels</label>
						<select name="labels" id="labels" class="form-control">
							<option value="test">test</option>
							<option value="">test</option>
						</select>
					</div>
					<div class="form-group">
						<label for="labels">Labels</label>
						<select name="labels" id="labels" class="form-control">
							<option value="test">test</option>
							<option value="">test</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Create</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
/* global formatColumn */

document.addEventListener('DOMContentLoaded', () => {
  ReactDOM.render(<DynamicDataTable
    DataURL={`${loris.BaseURL}/candidate_list/?format=json`}
    getFormattedCell={formatColumn}
    freezeColumn="PSCID"
    />,
    document.getElementById('datatable')
  );
});

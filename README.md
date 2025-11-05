# mycrolinks.com
Business Website for OpenSource IT Organization - MycroLinks

## Architecture

This website uses a static Jamstack architecture suitable for GitHub Pages deployment.

### Technology Stack

- **Frontend**: Static HTML, CSS, JavaScript
- **Backend**: Node.js script (runs via GitHub Actions)
- **API**: GitHub REST API via @octokit/rest
- **Hosting**: GitHub Pages ready

### Setup

1. **Install Dependencies**
   ```bash
   npm install
   ```

2. **Environment Variables**
   
   Create a `.env` file with:
   ```
   GH_PAT=your_github_personal_access_token
   GH_USERNAME=your_github_username
   ```

3. **Fetch Projects**
   ```bash
   npm start
   ```
   This generates `projects.json` with filtered GitHub repository data.

### GitHub Actions

The workflow `.github/workflows/fetch-projects.yml` automatically:
- Runs daily at midnight UTC
- Runs on push to `main` branch
- Can be triggered manually
- Fetches latest repository data and commits `projects.json`

**Required Secret**: Add `GH_PAT` to repository secrets under Settings > Secrets and variables > Actions.

### Project Filtering

Repositories are filtered based on marker files:
- `.personal` - Personal projects
- `.mycrolinks` - MycroLinks projects
- Both files present - Common projects

Category is determined by the first line in `.tags` file.

### Contact Form

The contact form uses [Formspree](https://formspree.io/) for email submission.


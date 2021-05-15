<div id="repo-content-pjax-container" class="repository-content ">

    
      
    <div>
  <div class="d-none d-lg-block mt-6 mr-3 Popover top-0 right-0 color-shadow-medium col-3">
    
  </div>


  <div class="gutter-condensed gutter-lg flex-column flex-md-row d-flex">

  <div class="flex-shrink-0 col-12 col-md-9 mb-4 mb-md-0">      




        

      <div class="file-navigation mb-3 d-flex flex-items-start">
  
<div class="position-relative">
  <details class="details-reset details-overlay mr-0 mb-0 " id="branch-select-menu">
    <summary class="btn css-truncate" data-hotkey="w" title="Switch branches or tags">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-git-branch text-gray">
    <path fill-rule="evenodd" d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
</svg>
      <span class="css-truncate-target" data-menu-button="">master</span>
      <span class="dropdown-caret"></span>
    </summary>

      
<div class="SelectMenu">
  <div class="SelectMenu-modal">
    <header class="SelectMenu-header">
      <span class="SelectMenu-title">Switch branches/tags</span>
      <button class="SelectMenu-closeButton" type="button" data-toggle-for="branch-select-menu"><svg aria-label="Close menu" aria-hidden="false" role="img" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-x">
    <path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path>
</svg></button>
    </header>

    <input-demux data-action="tab-container-change:input-demux#storeInput tab-container-changed:input-demux#updateInput" data-catalyst="">
      <tab-container class="d-flex flex-column js-branches-tags-tabs" style="min-height: 0;">
        <div class="SelectMenu-filter">
          <input data-target="input-demux.source" id="context-commitish-filter-field" class="SelectMenu-input form-control" aria-owns="ref-list-branches" data-controls-ref-menu-id="ref-list-branches" autofocus="" autocomplete="off" aria-label="Filter branches/tags" placeholder="Filter branches/tags" type="text">
        </div>

        <div class="SelectMenu-tabs" role="tablist" data-target="input-demux.control">
          <button class="SelectMenu-tab" type="button" role="tab" aria-selected="true" tabindex="0">Branches</button>
          <button class="SelectMenu-tab" type="button" role="tab" aria-selected="false" tabindex="-1">Tags</button>
        </div>

        <div role="tabpanel" id="ref-list-branches" data-filter-placeholder="Filter branches/tags" class="d-flex flex-column flex-auto overflow-auto" tabindex="">
          <ref-selector type="branch" data-targets="input-demux.sinks" data-action="
              input-entered:ref-selector#inputEntered
              tab-selected:ref-selector#tabSelected
              focus-list:ref-selector#focusFirstListMember
            " query-endpoint="/othneildrew/Best-README-Template/refs" cache-key="v0:1544502291.0" current-committish="bWFzdGVy" default-branch="bWFzdGVy" name-with-owner="b3RobmVpbGRyZXcvQmVzdC1SRUFETUUtVGVtcGxhdGU=" data-catalyst="">

            <template data-target="ref-selector.fetchFailedTemplate">
              <div class="SelectMenu-message" data-index="{{ index }}">Could not load branches</div>
            </template>

              <template data-target="ref-selector.noMatchTemplate">
    <div class="SelectMenu-message">Nothing to show</div>
</template>


            <!-- TODO: this max-height is necessary or else the branch list won't scroll.  why? -->
            <div data-target="ref-selector.listContainer" role="menu" class="SelectMenu-list " style="max-height: 330px">
              <div class="SelectMenu-loading pt-3 pb-0" aria-label="Menu is loading">
                <svg style="box-sizing: content-box; color: var(--color-icon-primary);" viewBox="0 0 16 16" fill="none" width="32" height="32" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
              </div>
            </div>

              <template data-target="ref-selector.itemTemplate">
  <a href="https://github.com/othneildrew/Best-README-Template/tree/{{ urlEncodedRefName }}" class="SelectMenu-item" role="menuitemradio" rel="nofollow" aria-checked="{{ isCurrent }}" data-index="{{ index }}">
    <svg class="octicon octicon-check SelectMenu-icon SelectMenu-icon--check" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
    <span class="flex-1 css-truncate css-truncate-overflow {{ isFilteringClass }}">{{ refName }}</span>
    <span hidden="{{ isNotDefault }}" class="Label Label--secondary flex-self-start">default</span>
  </a>
</template>


              <footer class="SelectMenu-footer"><a href="/othneildrew/Best-README-Template/branches">View all branches</a></footer>
          </ref-selector>

        </div>

        <div role="tabpanel" id="tags-menu" data-filter-placeholder="Find a tag" class="d-flex flex-column flex-auto overflow-auto" tabindex="" hidden="">
          <ref-selector type="tag" data-action="
              input-entered:ref-selector#inputEntered
              tab-selected:ref-selector#tabSelected
              focus-list:ref-selector#focusFirstListMember
            " data-targets="input-demux.sinks" query-endpoint="/othneildrew/Best-README-Template/refs" cache-key="v0:1544502291.0" current-committish="bWFzdGVy" default-branch="bWFzdGVy" name-with-owner="b3RobmVpbGRyZXcvQmVzdC1SRUFETUUtVGVtcGxhdGU=" data-catalyst="">

            <template data-target="ref-selector.fetchFailedTemplate">
              <div class="SelectMenu-message" data-index="{{ index }}">Could not load tags</div>
            </template>

            <template data-target="ref-selector.noMatchTemplate">
              <div class="SelectMenu-message" data-index="{{ index }}">Nothing to show</div>
            </template>

              <template data-target="ref-selector.itemTemplate">
  <a href="https://github.com/othneildrew/Best-README-Template/tree/{{ urlEncodedRefName }}" class="SelectMenu-item" role="menuitemradio" rel="nofollow" aria-checked="{{ isCurrent }}" data-index="{{ index }}">
    <svg class="octicon octicon-check SelectMenu-icon SelectMenu-icon--check" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
    <span class="flex-1 css-truncate css-truncate-overflow {{ isFilteringClass }}">{{ refName }}</span>
    <span hidden="{{ isNotDefault }}" class="Label Label--secondary flex-self-start">default</span>
  </a>
</template>


            <div data-target="ref-selector.listContainer" role="menu" class="SelectMenu-list" style="max-height: 330px">
              <div class="SelectMenu-loading pt-3 pb-0" aria-label="Menu is loading">
                <svg style="box-sizing: content-box; color: var(--color-icon-primary);" viewBox="0 0 16 16" fill="none" width="32" height="32" class="anim-rotate">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
</svg>
              </div>
            </div>
              <footer class="SelectMenu-footer"><a href="/othneildrew/Best-README-Template/tags">View all tags</a></footer>
          </ref-selector>
        </div>
      </tab-container>
    </input-demux>
  </div>
</div>

  </details>

</div>


  <div class="flex-self-center ml-3 flex-self-stretch d-none d-lg-flex flex-items-center lh-condensed-ultra">
    <a data-pjax="" href="/othneildrew/Best-README-Template/branches" class="Link--primary no-underline">
          <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-git-branch text-gray">
    <path fill-rule="evenodd" d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
</svg>
          <strong>1</strong>
          <span class="color-text-tertiary">branch</span>
    </a>
    <a data-pjax="" href="/othneildrew/Best-README-Template/tags" class="ml-3 Link--primary no-underline">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-tag text-gray">
    <path fill-rule="evenodd" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path>
</svg>
        <strong>0</strong>
        <span class="color-text-tertiary">tags</span>
    </a>
  </div>

  <div class="flex-auto"></div>

    <a class="btn ml-2 d-none d-md-block" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;FIND_FILE_BUTTON&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template/overview_actions/master&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="3582f7f1999bd90bd411a5e7ae0ac0468a61c12fb27398ec8cef07917a515860" data-ga-click="Repository, find file, location:repo overview" data-hotkey="t" data-pjax="true" href="/othneildrew/Best-README-Template/find/master">
    Go to file
</a>
    <details class="details-overlay details-reset position-relative d-block">
  <summary role="button" class="btn ml-2">
  
          <span class="d-none d-md-flex flex-items-center">
          Add file
          <span class="dropdown-caret ml-1"></span>
        </span>
        <span class="d-inline-block d-md-none">
          <svg aria-label="More options" role="img" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-kebab-horizontal">
    <path d="M8 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM1.5 9a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm13 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
</svg>
        </span>

  

</summary>
  <div>        <ul class="dropdown-menu dropdown-menu-sw">
            <li class="d-block d-md-none dropdown-divider" role="none"></li>
            <li><!-- '"` --><!-- </textarea></xmp> --><form action="/othneildrew/Best-README-Template/new/master" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="vx5yXor7IyI/vyA14p+oZHXQECuc+yJvbDsoDctpd0STSAlIozNyONrDnlJdVSI9lkYfgre6n6xaJlTY8oTgQQ==">
  <button class="dropdown-item btn-link" type="submit">
    Create new file
  </button>
</form></li>

            <li><a href="/othneildrew/Best-README-Template/upload/master" class="dropdown-item">
  Upload files
</a></li>

        </ul>
</div>
</details>


    <span class="d-none d-md-flex ml-2">
        
<get-repo data-catalyst="">
  <details class="position-relative details-overlay details-reset" data-action="toggle:get-repo#onDetailsToggle">
    <summary class="btn " data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;repository_id&quot;:161215159,&quot;target&quot;:&quot;CLONE_OR_DOWNLOAD_BUTTON&quot;,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="79b3b4457a31842d43225d8e80fa3d834252af68bf0f3c5df9454299163a6404">
      <svg class="octicon octicon-download mr-1" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.47 10.78a.75.75 0 001.06 0l3.75-3.75a.75.75 0 00-1.06-1.06L8.75 8.44V1.75a.75.75 0 00-1.5 0v6.69L4.78 5.97a.75.75 0 00-1.06 1.06l3.75 3.75zM3.75 13a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5z"></path></svg>
      Code
      <span class="dropdown-caret"></span>
</summary>    <div class="position-relative">
      <div class="dropdown-menu dropdown-menu-sw p-0" style="top:6px;width:378px;">
        <div data-target="get-repo.modal">
          <div class="border-bottom p-3">
            <a class="Link--muted float-right tooltipped tooltipped-s" href="https://docs.github.com/articles/which-remote-url-should-i-use" target="_blank" aria-label="Which remote URL should I use?">
  <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-question">
    <path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm9 3a1 1 0 11-2 0 1 1 0 012 0zM6.92 6.085c.081-.16.19-.299.34-.398.145-.097.371-.187.74-.187.28 0 .553.087.738.225A.613.613 0 019 6.25c0 .177-.04.264-.077.318a.956.956 0 01-.277.245c-.076.051-.158.1-.258.161l-.007.004a7.728 7.728 0 00-.313.195 2.416 2.416 0 00-.692.661.75.75 0 001.248.832.956.956 0 01.276-.245 6.3 6.3 0 01.26-.16l.006-.004c.093-.057.204-.123.313-.195.222-.149.487-.355.692-.662.214-.32.329-.702.329-1.15 0-.76-.36-1.348-.863-1.725A2.76 2.76 0 008 4c-.631 0-1.155.16-1.572.438-.413.276-.68.638-.849.977a.75.75 0 101.342.67z"></path>
</svg>
</a>

<div class="text-bold">
  <svg class="octicon octicon-terminal mr-3" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0114.25 15H1.75A1.75 1.75 0 010 13.25V2.75zm1.75-.25a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25H1.75zM7.25 8a.75.75 0 01-.22.53l-2.25 2.25a.75.75 0 11-1.06-1.06L5.44 8 3.72 6.28a.75.75 0 111.06-1.06l2.25 2.25c.141.14.22.331.22.53zm1.5 1.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"></path></svg>
  Clone
</div>

<tab-container>

  <div class="UnderlineNav my-2 box-shadow-none">
    <div class="UnderlineNav-body" role="tablist">
          <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="/users/set_protocol?protocol_type=clone" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="U2D+yY202He6OKcC0Jg8E5uo5L+MDVE1tfVPFMcXb+vx3/jYiwXPXuAp52yefe5A/7FA2lZH3SUJPWU5Wz7o2w==">
            <button name="protocol_selector" type="submit" role="tab" class="UnderlineNav-item lh-default f6 py-0 px-0 mr-2 position-relative" aria-selected="true" value="http" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;USE_HTTPS&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="b4ab519f786763ae7f91c6e2c47c430461953c0f16cecf3661b78e1f69a16401" tabindex="0">
              HTTPS
</button></form>          <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="/users/set_protocol?protocol_type=clone" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="DYVfBe7CJ1sVu0pZ+49a4hPRXwI9iwz8TF7dGK2hTQGvOlkU6HMwck+qCje1aoixd8j7Z+fBgOzwlvc1MYjKMQ==">
            <button name="protocol_selector" type="submit" role="tab" class="UnderlineNav-item lh-default f6 py-0 px-0 mr-2 position-relative" value="ssh" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;USE_SSH&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="c76a95624a43779a637ebe9a653e34f207ba3b21e354a14c1b9e786f634921ce" aria-selected="false" tabindex="-1">
              SSH
</button></form>          <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="/users/set_protocol?protocol_type=clone" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="zmgPcWhPvIvJhrrH04oRXguQnsav2NJVioWQjZ3xqwZs1wlgbv6ropOX+qmdb8MNb4k6o3WSXkU2TbqgAdgsNg==">
            <button name="protocol_selector" type="submit" role="tab" class="UnderlineNav-item lh-default f6 py-0 px-0 mr-2 position-relative" value="gh_cli" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;USE_GH_CLI&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="69fea7db6ab5917d1526f10145c1e60d71ac40fe60ee98806951cf92efe36d47" aria-selected="false" tabindex="-1">
              GitHub CLI
</button></form>    </div>
  </div>

  <div role="tabpanel">
    <div class="input-group">
  <input type="text" class="form-control input-monospace input-sm color-bg-secondary" data-autoselect="" value="https://github.com/othneildrew/Best-README-Template.git" aria-label="https://github.com/othneildrew/Best-README-Template.git" readonly="">
  <div class="input-group-button">
    <clipboard-copy value="https://github.com/othneildrew/Best-README-Template.git" aria-label="Copy to clipboard" class="btn btn-sm" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;COPY_URL&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="b82dbdebce5d2fd85e111d4e7220e583b786406bc058d54d1bf428395ec9f6ae" tabindex="0" role="button"><svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg></clipboard-copy>
  </div>
</div>

    <p class="mt-2 mb-0 f6 color-text-secondary">
        Use Git or checkout with SVN using the web URL.
    </p>
  </div>

  <div role="tabpanel" hidden="">
      <div class="flash flash-warn f6 mt-2 mb-3 p-3">
        You don't have any public SSH keys in your GitHub account.
        You can <a href="/settings/ssh/new">add a new public key</a>, or try cloning this repository via HTTPS.
      </div>

    <div class="input-group">
  <input type="text" class="form-control input-monospace input-sm color-bg-secondary" data-autoselect="" value="git@github.com:othneildrew/Best-README-Template.git" aria-label="git@github.com:othneildrew/Best-README-Template.git" readonly="">
  <div class="input-group-button">
    <clipboard-copy value="git@github.com:othneildrew/Best-README-Template.git" aria-label="Copy to clipboard" class="btn btn-sm" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;COPY_URL&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="b82dbdebce5d2fd85e111d4e7220e583b786406bc058d54d1bf428395ec9f6ae" tabindex="0" role="button"><svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg></clipboard-copy>
  </div>
</div>

    <p class="mt-2 mb-0 f6 color-text-secondary">
        Use a password-protected SSH key.
    </p>
  </div>

  <div role="tabpanel" hidden="">
    <div class="input-group">
  <input type="text" class="form-control input-monospace input-sm color-bg-secondary" data-autoselect="" value="gh repo clone othneildrew/Best-README-Template" aria-label="gh repo clone othneildrew/Best-README-Template" readonly="">
  <div class="input-group-button">
    <clipboard-copy value="gh repo clone othneildrew/Best-README-Template" aria-label="Copy to clipboard" class="btn btn-sm" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;COPY_URL&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="b82dbdebce5d2fd85e111d4e7220e583b786406bc058d54d1bf428395ec9f6ae" tabindex="0" role="button"><svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg></clipboard-copy>
  </div>
</div>

    <p class="mt-2 mb-0 f6 color-text-secondary">
      Work fast with our official CLI.
      <a href="https://cli.github.com" target="_blank">Learn more</a>.
    </p>
  </div>
</tab-container>

          </div>
          <ul class="list-style-none">
            <li data-platforms="windows,mac" class="Box-row Box-row--hover-gray p-0 rounded-0 mt-0 js-remove-unless-platform">
              <a class="d-flex flex-items-center color-text-primary text-bold no-underline p-3" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;OPEN_IN_DESKTOP&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aadcbf78d1d0dfa650909d82c018cdfb905a647f4cf4945611beb5bb0dd9fa40" data-action="click:get-repo#showDownloadMessage" href="x-github-client://openRepo/https://github.com/othneildrew/Best-README-Template">
                <svg class="octicon octicon-desktop-download mr-3" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="M4.927 5.427l2.896 2.896a.25.25 0 00.354 0l2.896-2.896A.25.25 0 0010.896 5H8.75V.75a.75.75 0 10-1.5 0V5H5.104a.25.25 0 00-.177.427z"></path><path d="M1.573 2.573a.25.25 0 00-.073.177v7.5a.25.25 0 00.25.25h12.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-3a.75.75 0 110-1.5h3A1.75 1.75 0 0116 2.75v7.5A1.75 1.75 0 0114.25 12h-3.727c.099 1.041.52 1.872 1.292 2.757A.75.75 0 0111.25 16h-6.5a.75.75 0 01-.565-1.243c.772-.885 1.192-1.716 1.292-2.757H1.75A1.75 1.75 0 010 10.25v-7.5A1.75 1.75 0 011.75 1h3a.75.75 0 010 1.5h-3a.25.25 0 00-.177.073zM6.982 12a5.72 5.72 0 01-.765 2.5h3.566a5.72 5.72 0 01-.765-2.5H6.982z"></path></svg>
                Open with GitHub Desktop
</a>            </li>
              <li data-platforms="windows,mac" class="Box-row Box-row--hover-gray p-0 js-remove-unless-platform">
                <a class="d-flex flex-items-center color-text-primary text-bold no-underline p-3" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;OPEN_IN_VISUAL_STUDIO&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="f7e9388b39d17903fbf6436562b10666fed740b16ffda0e3a7117b7ad9154cef" data-open-app="visual-studio" data-action="click:get-repo#showDownloadMessage" href="git-client://clone?repo=https%3A%2F%2Fgithub.com%2Fothneildrew%2FBest-README-Template">
                  Open with Visual Studio
</a>              </li>
            <li class="Box-row Box-row--hover-gray p-0">
              <a class="d-flex flex-items-center color-text-primary text-bold no-underline p-3" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;DOWNLOAD_ZIP&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="069b3026afb5b5c493a200d791a216cf5a18a906b759c90bb20551c74df4d218" data-ga-click="Repository, download zip, location:repo overview" data-open-app="link" href="/othneildrew/Best-README-Template/archive/refs/heads/master.zip">
                <svg class="octicon octicon-file-zip mr-3" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.5 1.75a.25.25 0 01.25-.25h3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h2.086a.25.25 0 01.177.073l2.914 2.914a.25.25 0 01.073.177v8.586a.25.25 0 01-.25.25h-.5a.75.75 0 000 1.5h.5A1.75 1.75 0 0014 13.25V4.664c0-.464-.184-.909-.513-1.237L10.573.513A1.75 1.75 0 009.336 0H3.75A1.75 1.75 0 002 1.75v11.5c0 .649.353 1.214.874 1.515a.75.75 0 10.752-1.298.25.25 0 01-.126-.217V1.75zM8.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM6 5.25a.75.75 0 01.75-.75h.5a.75.75 0 010 1.5h-.5A.75.75 0 016 5.25zm2 1.5A.75.75 0 018.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 018 6.75zm-1.25.75a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM8 9.75A.75.75 0 018.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 018 9.75zm-.75.75a1.75 1.75 0 00-1.75 1.75v3c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75v-3a1.75 1.75 0 00-1.75-1.75h-.5zM7 12.25a.25.25 0 01.25-.25h.5a.25.25 0 01.25.25v2.25H7v-2.25z"></path></svg>
                Download ZIP
</a>            </li>
          </ul>
        </div>

        <div class="p-3" data-targets="get-repo.platforms" data-platform="mac" hidden="">
          <h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="AnimatedEllipsis"></span></h4>
          <p class="color-text-secondary">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
          <button type="button" class="btn-link" data-action="click:get-repo#onDetailsToggle">Go back</button>
        </div>

        <div class="p-3" data-targets="get-repo.platforms" data-platform="windows" hidden="">
          <h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="AnimatedEllipsis"></span></h4>
          <p class="color-text-secondary">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
          <button type="button" class="btn-link" data-action="click:get-repo#onDetailsToggle">Go back</button>
        </div>

        <div class="p-3" data-targets="get-repo.platforms" data-platform="xcode" hidden="">
          <h4 class="lh-condensed mb-3">Launching Xcode<span class="AnimatedEllipsis"></span></h4>
          <p class="color-text-secondary">If nothing happens, <a href="https://developer.apple.com/xcode/">download Xcode</a> and try again.</p>
          <button type="button" class="btn-link" data-action="click:get-repo#onDetailsToggle">Go back</button>
        </div>

        <div class="p-3" data-targets="get-repo.platforms" data-platform="visual-studio" hidden="">
          <h4 class="lh-condensed mb-3">Launching Visual Studio<span class="AnimatedEllipsis"></span></h4>
          <p class="color-text-secondary">If nothing happens, <a href="https://visualstudio.github.com/">download the GitHub extension for Visual Studio</a> and try again.</p>
          <button type="button" class="btn-link" data-action="click:get-repo#onDetailsToggle">Go back</button>
        </div>

      </div>
    </div>
  </details>
</get-repo>


        <a class="btn btn-primary ml-2" href="/othneildrew/Best-README-Template/generate">Use this template</a>

    </span>
</div>


      


<div class="Box mb-3">
  <div class="Box-header Box-header--blue position-relative">
    <h2 class="sr-only">Latest commit</h2>
    <div class="js-details-container Details d-flex rounded-top-1 flex-items-center flex-wrap" data-issue-and-pr-hovercards-enabled="">
      
  <div class="flex-shrink-0 ml-n1 mr-n1 mt-n1 mb-n1 hx_avatar_stack_commit">
    
<div class="AvatarStack flex-self-start  ">
  <div class="AvatarStack-body" aria-label="othneildrew">
      <a class="avatar avatar-user" style="width:24px;height:24px;" data-skip-pjax="true" data-test-selector="commits-avatar-stack-avatar-link" data-hovercard-type="user" data-hovercard-url="/users/othneildrew/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/othneildrew">
        <img data-test-selector="commits-avatar-stack-avatar-image" src="https://avatars.githubusercontent.com/u/24785934?s=48&amp;v=4" width="24" height="24" alt="@othneildrew" class=" avatar-user">
</a>  </div>
</div>

  </div>
  <div class="flex-1 d-flex flex-items-center ml-3 min-width-0">
    <div class="css-truncate css-truncate-overflow color-text-secondary">
      
      <a href="/othneildrew/Best-README-Template/commits?author=othneildrew" class="commit-author user-mention" title="View all commits by othneildrew">othneildrew</a>


  

        <span class="d-none d-sm-inline">
            <a data-pjax="true" data-test-selector="commit-tease-commit-message" title="Bug fix: fixed alignment issue of image &amp; title section" class="Link--primary markdown-title" href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1">Bug fix: fixed alignment issue of image &amp; title section</a>
        </span>
    </div>
    <span class="hidden-text-expander ml-2 d-inline-block d-inline-block d-lg-none">
      <button type="button" class="hx_bg-black-fade-15 color-text-primary ellipsis-expander js-details-target" aria-expanded="false">
        …
      </button>
    </span>
    <div class="d-flex flex-auto flex-justify-end ml-3 flex-items-baseline">
        
      <a href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1" class="f6 Link--secondary text-mono ml-2 d-none d-lg-inline" data-pjax="">
        8103cdf
      </a>
      <a href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1" class="Link--secondary ml-2" data-pjax="">
        <relative-time datetime="2020-11-23T00:11:49Z" class="no-wrap" title="22 nov 2020 21:11 GMT-3">on 22 Nov 2020</relative-time>
      </a>
    </div>
  </div>
  <div class="pl-0 pl-md-5 flex-order-1 width-full Details-content--hidden">
      <div class="mt-2">
        <a data-pjax="true" data-test-selector="commit-tease-commit-message" class="Link--primary text-bold" href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1">Bug fix: fixed alignment issue of image &amp; title section</a>
      </div>
    <div class="d-flex flex-items-center">
      <span class="color-text-primary text-mono d-lg-none hx_bg-black-fade-15 px-1 rounded-1 text-small mt-2">8103cdf</span>
    </div>
  </div>
      <div class="flex-shrink-0">
        <h2 class="sr-only">Git stats</h2>
        <ul class="list-style-none d-flex">
          <li class="ml-0 ml-md-3">
            <a data-pjax="" href="/othneildrew/Best-README-Template/commits/master" class="pl-3 pr-3 py-3 p-md-0 mt-n3 mb-n3 mr-n3 m-md-0 Link--primary no-underline no-wrap">
              <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-history text-gray">
    <path fill-rule="evenodd" d="M1.643 3.143L.427 1.927A.25.25 0 000 2.104V5.75c0 .138.112.25.25.25h3.646a.25.25 0 00.177-.427L2.715 4.215a6.5 6.5 0 11-1.18 4.458.75.75 0 10-1.493.154 8.001 8.001 0 101.6-5.684zM7.75 4a.75.75 0 01.75.75v2.992l2.028.812a.75.75 0 01-.557 1.392l-2.5-1A.75.75 0 017 8.25v-3.5A.75.75 0 017.75 4z"></path>
</svg>
              <span class="d-none d-sm-inline">
                    <strong>21</strong>
                    <span aria-label="Commits on master" class="color-text-secondary d-none d-lg-inline">
                      commits
                    </span>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <h2 id="files" class="sr-only">Files</h2>
  


    <a class="d-none js-permalink-shortcut" data-hotkey="y" href="/othneildrew/Best-README-Template/tree/8103cdf4ecf561c8205803433c4c8e398a3f70d1">Permalink</a>

  <div class="include-fragment-error flash flash-error flash-full py-2">
  <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-alert">
    <path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path>
</svg>
  
    Failed to load latest commit information.


  
</div>  <div class="js-details-container Details">
    <div role="grid" aria-labelledby="files" class="Details-content--hidden-not-important js-navigation-container js-active-navigation-container d-md-block" data-pjax="">
      <div class="sr-only" role="row">
        <div role="columnheader">Type</div>
        <div role="columnheader">Name</div>
        <div role="columnheader" class="d-none d-md-block">Latest commit message</div>
        <div role="columnheader">Commit time</div>
      </div>

        <div role="row" class="Box-row Box-row--focus-gray py-2 d-flex position-relative js-navigation-item">
          <div role="gridcell" class="mr-3 flex-shrink-0" style="width: 16px;">
              <svg aria-label="Directory" aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-file-directory hx_color-icon-directory">
    <path fill-rule="evenodd" d="M1.75 1A1.75 1.75 0 000 2.75v10.5C0 14.216.784 15 1.75 15h12.5A1.75 1.75 0 0016 13.25v-8.5A1.75 1.75 0 0014.25 3h-6.5a.25.25 0 01-.2-.1l-.9-1.2c-.33-.44-.85-.7-1.4-.7h-3.5z"></path>
</svg>
          </div>

          <div role="rowheader" class="flex-auto min-width-0 col-md-2 mr-3">
            <span class="css-truncate css-truncate-target d-block width-fit"><a class="js-navigation-open Link--primary" title="images" data-pjax="#repo-content-pjax-container" href="/othneildrew/Best-README-Template/tree/master/images">images</a></span>
          </div>

          <div role="gridcell" class="flex-auto min-width-0 d-none d-md-block col-5 mr-3">
              <span class="css-truncate css-truncate-target d-block width-fit markdown-title">
                    <a data-pjax="true" title="Add blank template, corrected contributors badge" class="Link--secondary" href="/othneildrew/Best-README-Template/commit/182baaeca1aa567b427011c544ac451339f9c3a5">Add blank template, corrected contributors badge</a>
              </span>
          </div>

          <div role="gridcell" class="color-text-tertiary text-right" style="width:100px;">
              <time-ago datetime="2019-07-28T20:51:24Z" class="no-wrap" title="28 jul 2019 16:51 GMT-4">2 years ago</time-ago>
          </div>

        </div>
        <div role="row" class="Box-row Box-row--focus-gray py-2 d-flex position-relative js-navigation-item">
          <div role="gridcell" class="mr-3 flex-shrink-0" style="width: 16px;">
              <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-file color-icon-tertiary">
    <path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
</svg>
          </div>

          <div role="rowheader" class="flex-auto min-width-0 col-md-2 mr-3">
            <span class="css-truncate css-truncate-target d-block width-fit"><a class="js-navigation-open Link--primary" title="BLANK_README.md" data-pjax="#repo-content-pjax-container" href="/othneildrew/Best-README-Template/blob/master/BLANK_README.md">BLANK_README.md</a></span>
          </div>

          <div role="gridcell" class="flex-auto min-width-0 d-none d-md-block col-5 mr-3">
              <span class="css-truncate css-truncate-target d-block width-fit markdown-title">
                    <a data-pjax="true" title="Bug fix: fixed alignment issue of image &amp; title section" class="Link--secondary" href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1">Bug fix: fixed alignment issue of image &amp; title section</a>
              </span>
          </div>

          <div role="gridcell" class="color-text-tertiary text-right" style="width:100px;">
              <time-ago datetime="2020-11-23T00:11:49Z" class="no-wrap" title="22 nov 2020 21:11 GMT-3">6 months ago</time-ago>
          </div>

        </div>
        <div role="row" class="Box-row Box-row--focus-gray py-2 d-flex position-relative js-navigation-item">
          <div role="gridcell" class="mr-3 flex-shrink-0" style="width: 16px;">
              <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-file color-icon-tertiary">
    <path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
</svg>
          </div>

          <div role="rowheader" class="flex-auto min-width-0 col-md-2 mr-3">
            <span class="css-truncate css-truncate-target d-block width-fit"><a class="js-navigation-open Link--primary" title="LICENSE.txt" data-pjax="#repo-content-pjax-container" itemprop="license" href="/othneildrew/Best-README-Template/blob/master/LICENSE.txt">LICENSE.txt</a></span>
          </div>

          <div role="gridcell" class="flex-auto min-width-0 d-none d-md-block col-5 mr-3">
              <span class="css-truncate css-truncate-target d-block width-fit markdown-title">
                    <a data-pjax="true" title="Add LICENSE and screenshot" class="Link--secondary" href="/othneildrew/Best-README-Template/commit/423e0387ca1b015d5062584bc86c3800dc6fd0fe">Add LICENSE and screenshot</a>
              </span>
          </div>

          <div role="gridcell" class="color-text-tertiary text-right" style="width:100px;">
              <time-ago datetime="2018-12-11T13:41:07Z" class="no-wrap" title="11 dic 2018 10:41 GMT-3">3 years ago</time-ago>
          </div>

        </div>
        <div role="row" class="Box-row Box-row--focus-gray py-2 d-flex position-relative js-navigation-item navigation-focus">
          <div role="gridcell" class="mr-3 flex-shrink-0" style="width: 16px;">
              <svg aria-label="File" aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-file color-icon-tertiary">
    <path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path>
</svg>
          </div>

          <div role="rowheader" class="flex-auto min-width-0 col-md-2 mr-3">
            <span class="css-truncate css-truncate-target d-block width-fit"><a class="js-navigation-open Link--primary" title="README.md" data-pjax="#repo-content-pjax-container" href="/othneildrew/Best-README-Template/blob/master/README.md">README.md</a></span>
          </div>

          <div role="gridcell" class="flex-auto min-width-0 d-none d-md-block col-5 mr-3">
              <span class="css-truncate css-truncate-target d-block width-fit markdown-title">
                    <a data-pjax="true" title="Bug fix: fixed alignment issue of image &amp; title section" class="Link--secondary" href="/othneildrew/Best-README-Template/commit/8103cdf4ecf561c8205803433c4c8e398a3f70d1">Bug fix: fixed alignment issue of image &amp; title section</a>
              </span>
          </div>

          <div role="gridcell" class="color-text-tertiary text-right" style="width:100px;">
              <time-ago datetime="2020-11-23T00:11:49Z" class="no-wrap" title="22 nov 2020 21:11 GMT-3">6 months ago</time-ago>
          </div>

        </div>
    </div>
    <div class="Details-content--shown Box-footer d-md-none p-0">
      <button type="button" class="d-block btn-link js-details-target width-full px-3 py-2" aria-expanded="false">
        View code
      </button>
    </div>
  </div>




</div>

    <readme-toc data-catalyst="">

    <div id="readme" class="Box md js-code-block-container Box--responsive">

      <div class="d-flex js-sticky js-position-sticky top-0 border-top-0 border-bottom p-2 flex-items-center flex-justify-between color-bg-primary rounded-top-2" style="position: sticky; z-index: 90; top: 0px !important;" data-original-top="0px">
        <div class="d-flex flex-items-center">
            <details data-target="readme-toc.trigger" data-menu-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;trigger&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-menu-hydro-click-hmac="a23ee111f412c9c5873564be26cf5ef593212ca190f5862c1271f4b6b36f06fe" class="dropdown details-reset details-overlay">
  <summary class="btn btn-octicon m-0 mr-2 p-2" aria-haspopup="menu" aria-label="Table of Contents" role="button">
    <svg height="16" class="octicon octicon-list-unordered" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
  </summary>

  <details-menu class="SelectMenu" role="menu">
    <div class="SelectMenu-modal rounded-3 mt-1" style="max-height:340px;">
      <div class="SelectMenu-list SelectMenu-list--borderless p-2" style="overscroll-behavior: contain;">

          <a role="menuitem" class="filter-item py-1 " style="padding-left: 36px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#best-readme-template" aria-current="page">Best-README-Template</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#about-the-project">About The Project</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 36px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#built-with">Built With</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#getting-started">Getting Started</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 36px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#prerequisites">Prerequisites</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 36px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#installation">Installation</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#usage">Usage</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#roadmap">Roadmap</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#contributing">Contributing</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#license">License</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#contact">Contact</a>
          <a role="menuitem" class="filter-item py-1 " style="padding-left: 24px;" data-action="click:readme-toc#blur" data-targets="readme-toc.entries" data-hydro-click="{&quot;event_type&quot;:&quot;repository_toc_menu.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;entry&quot;,&quot;repository_id&quot;:161215159,&quot;originating_url&quot;:&quot;https://github.com/othneildrew/Best-README-Template&quot;,&quot;user_id&quot;:10935025}}" data-hydro-click-hmac="aaa9f9e0488ef97c56d7dc1133d0cfc87cc25dcb36d9ba948a50b2dcfbb0efcd" href="#acknowledgements">Acknowledgements</a>
      </div>
    </div>
  </details-menu>
</details>

          <h2 class="Box-title">
            <a href="#readme" class="Link--primary">README.md</a>
          </h2>
        </div>
      </div>

        <div data-target="readme-toc.content" class="Box-body px-5 pb-5">
          <article class="markdown-body entry-content container-lg" itemprop="text">


<p><a href="https://github.com/othneildrew/Best-README-Template/graphs/contributors"><img src="https://camo.githubusercontent.com/6a58189bfdc0586c06288c336cc805272bf16b06ce1ba81f9d299e4ff46992fe/68747470733a2f2f696d672e736869656c64732e696f2f6769746875622f636f6e7472696275746f72732f6f74686e65696c647265772f426573742d524541444d452d54656d706c6174652e7376673f7374796c653d666f722d7468652d6261646765" alt="Contributors" data-canonical-src="https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge" style="max-width:100%;"></a>
<a href="https://github.com/othneildrew/Best-README-Template/network/members"><img src="https://camo.githubusercontent.com/41b2ca58ba13fd422e931f37deb272c903db457a8037cc66101e1e6e0ac7c5ef/68747470733a2f2f696d672e736869656c64732e696f2f6769746875622f666f726b732f6f74686e65696c647265772f426573742d524541444d452d54656d706c6174652e7376673f7374796c653d666f722d7468652d6261646765" alt="Forks" data-canonical-src="https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge" style="max-width:100%;"></a>
<a href="https://github.com/othneildrew/Best-README-Template/stargazers"><img src="https://camo.githubusercontent.com/bbe16ea29471b27ca22987d597ee33cbf3bf3dcc3970bf11378212da56a44daa/68747470733a2f2f696d672e736869656c64732e696f2f6769746875622f73746172732f6f74686e65696c647265772f426573742d524541444d452d54656d706c6174652e7376673f7374796c653d666f722d7468652d6261646765" alt="Stargazers" data-canonical-src="https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge" style="max-width:100%;"></a>
<a href="https://github.com/othneildrew/Best-README-Template/issues"><img src="https://camo.githubusercontent.com/b2d93a16ff8ddd733fa825a03e367b8e36dfad71ef4614d4b9cfd2566b9bcf10/68747470733a2f2f696d672e736869656c64732e696f2f6769746875622f6973737565732f6f74686e65696c647265772f426573742d524541444d452d54656d706c6174652e7376673f7374796c653d666f722d7468652d6261646765" alt="Issues" data-canonical-src="https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge" style="max-width:100%;"></a>
<a href="https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt"><img src="https://camo.githubusercontent.com/111148992d0253f8d5e36b62087d48a9eabb1d7244b2b7316214f47d5c9a8781/68747470733a2f2f696d672e736869656c64732e696f2f6769746875622f6c6963656e73652f6f74686e65696c647265772f426573742d524541444d452d54656d706c6174652e7376673f7374796c653d666f722d7468652d6261646765" alt="MIT License" data-canonical-src="https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge" style="max-width:100%;"></a>
<a href="https://linkedin.com/in/othneildrew" rel="nofollow"><img src="https://camo.githubusercontent.com/1ffde4ea8d2869a62cdf80282516c524e1109befc83d6339aae7a55d94ff4ae5/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f2d4c696e6b6564496e2d626c61636b2e7376673f7374796c653d666f722d7468652d6261646765266c6f676f3d6c696e6b6564696e26636f6c6f72423d353535" alt="LinkedIn" data-canonical-src="https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&amp;logo=linkedin&amp;colorB=555" style="max-width:100%;"></a></p>

<br>
<p align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="/othneildrew/Best-README-Template/raw/master/images/logo.png" alt="Logo" width="80" height="80" style="max-width:100%;">
  </a>
  </p><h3 align="center"><a id="user-content-best-readme-template" class="anchor" aria-hidden="true" href="#best-readme-template"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Best-README-Template</h3>
  <p align="center">
    An awesome README template to jumpstart your projects!
    <br>
    <a href="https://github.com/othneildrew/Best-README-Template"><strong>Explore the docs »</strong></a>
    <br>
    <br>
    <a href="https://github.com/othneildrew/Best-README-Template">View Demo</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Report Bug</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Request Feature</a>
  </p>
<p></p>

<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<h2><a id="user-content-about-the-project" class="anchor" aria-hidden="true" href="#about-the-project"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>About The Project</h2>
<p><a href="https://example.com" rel="nofollow"><img src="/othneildrew/Best-README-Template/raw/master/images/screenshot.png" alt="Product Name Screen Shot" style="max-width:100%;"></a></p>
<p>There are many great README templates available on GitHub, however, I didn't find one that really suit my needs so I created this enhanced one. I want to create a README template so amazing that it'll be the last one you ever need -- I think this is it.</p>
<p>Here's why:</p>
<ul>
<li>Your time should be focused on creating something amazing. A project that solves a problem and helps others</li>
<li>You shouldn't be doing the same tasks over and over like creating a README from scratch</li>
<li>You should element DRY principles to the rest of your life <g-emoji class="g-emoji" alias="smile" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f604.png">😄</g-emoji></li>
</ul>
<p>Of course, no one template will serve all projects since your needs may be different. So I'll be adding more in the near future. You may also suggest changes by forking this repo and creating a pull request or opening an issue. Thanks to all the people have have contributed to expanding this template!</p>
<p>A list of commonly used resources that I find helpful are listed in the acknowledgements.</p>
<h3><a id="user-content-built-with" class="anchor" aria-hidden="true" href="#built-with"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Built With</h3>
<p>This section should list any major frameworks that you built your project using. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.</p>
<ul>
<li><a href="https://getbootstrap.com" rel="nofollow">Bootstrap</a></li>
<li><a href="https://jquery.com" rel="nofollow">JQuery</a></li>
<li><a href="https://laravel.com" rel="nofollow">Laravel</a></li>
</ul>

<h2><a id="user-content-getting-started" class="anchor" aria-hidden="true" href="#getting-started"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Getting Started</h2>
<p>This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.</p>
<h3><a id="user-content-prerequisites" class="anchor" aria-hidden="true" href="#prerequisites"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Prerequisites</h3>
<p>This is an example of how to list things you need to use the software and how to install them.</p>
<ul>
<li>npm
<div class="highlight highlight-source-shell position-relative"><pre>npm install npm@latest -g</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="npm install npm@latest -g
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon d-block m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-block d-sm-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</li>
</ul>
<h3><a id="user-content-installation" class="anchor" aria-hidden="true" href="#installation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Installation</h3>
<ol>
<li>Get a free API Key at <a href="https://example.com" rel="nofollow">https://example.com</a></li>
<li>Clone the repo
<div class="highlight highlight-source-shell position-relative"><pre>git clone https://github.com/your_username_/Project-Name.git</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="git clone https://github.com/your_username_/Project-Name.git
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon d-block m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-block d-sm-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</li>
<li>Install NPM packages
<div class="highlight highlight-source-shell position-relative"><pre>npm install</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="npm install
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon d-block m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-block d-sm-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</li>
<li>Enter your API in <code>config.js</code>
<div class="highlight highlight-source-js position-relative"><pre><span class="pl-k">const</span> <span class="pl-c1">API_KEY</span> <span class="pl-c1">=</span> <span class="pl-s">'ENTER YOUR API'</span><span class="pl-kos">;</span></pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="const API_KEY = 'ENTER YOUR API';
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon d-block m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-block d-sm-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
</li>
</ol>

<h2><a id="user-content-usage" class="anchor" aria-hidden="true" href="#usage"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Usage</h2>
<p>Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.</p>
<p><em>For more examples, please refer to the <a href="https://example.com" rel="nofollow">Documentation</a></em></p>

<h2><a id="user-content-roadmap" class="anchor" aria-hidden="true" href="#roadmap"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Roadmap</h2>
<p>See the <a href="https://github.com/othneildrew/Best-README-Template/issues">open issues</a> for a list of proposed features (and known issues).</p>

<h2><a id="user-content-contributing" class="anchor" aria-hidden="true" href="#contributing"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Contributing</h2>
<p>Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are <strong>greatly appreciated</strong>.</p>
<ol>
<li>Fork the Project</li>
<li>Create your Feature Branch (<code>git checkout -b feature/AmazingFeature</code>)</li>
<li>Commit your Changes (<code>git commit -m 'Add some AmazingFeature'</code>)</li>
<li>Push to the Branch (<code>git push origin feature/AmazingFeature</code>)</li>
<li>Open a Pull Request</li>
</ol>

<h2><a id="user-content-license" class="anchor" aria-hidden="true" href="#license"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>License</h2>
<p>Distributed under the MIT License. See <code>LICENSE</code> for more information.</p>

<h2><a id="user-content-contact" class="anchor" aria-hidden="true" href="#contact"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Contact</h2>
<p>Your Name - <a href="https://twitter.com/your_username" rel="nofollow">@your_twitter</a> - <a href="mailto:email@example.com">email@example.com</a></p>
<p>Project Link: <a href="https://github.com/your_username/repo_name">https://github.com/your_username/repo_name</a></p>

<h2><a id="user-content-acknowledgements" class="anchor" aria-hidden="true" href="#acknowledgements"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Acknowledgements</h2>
<ul>
<li><a href="https://www.webpagefx.com/tools/emoji-cheat-sheet" rel="nofollow">GitHub Emoji Cheat Sheet</a></li>
<li><a href="https://shields.io" rel="nofollow">Img Shields</a></li>
<li><a href="https://choosealicense.com" rel="nofollow">Choose an Open Source License</a></li>
<li><a href="https://pages.github.com">GitHub Pages</a></li>
<li><a href="https://daneden.github.io/animate.css" rel="nofollow">Animate.css</a></li>
<li><a href="https://connoratherton.com/loaders" rel="nofollow">Loaders.css</a></li>
<li><a href="https://kenwheeler.github.io/slick" rel="nofollow">Slick Carousel</a></li>
<li><a href="https://github.com/cferdinandi/smooth-scroll">Smooth Scroll</a></li>
<li><a href="http://leafo.net/sticky-kit" rel="nofollow">Sticky Kit</a></li>
<li><a href="http://jvectormap.com" rel="nofollow">JVectorMap</a></li>
<li><a href="https://fontawesome.com" rel="nofollow">Font Awesome</a></li>
</ul>


</article>
        </div>
    </div>

  </readme-toc>


</div>

    <div class="flex-shrink-0 col-12 col-md-3">      

      <div class="BorderGrid BorderGrid--spacious" data-pjax="">
        <div class="BorderGrid-row hide-sm hide-md">
          <div class="BorderGrid-cell">
            <h2 class="mb-3 h4">About</h2>

    <p class="f4 mt-3">
      An awesome README template to jumpstart your projects! 
    </p>

  <h3 class="sr-only">Topics</h3>
  <div class="mt-3">
      <div class="f6">
      <a data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:readme" href="/topics/readme" title="Topic: readme" class="topic-tag topic-tag-link">
  readme
</a>
      <a data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:readme-template" href="/topics/readme-template" title="Topic: readme-template" class="topic-tag topic-tag-link">
  readme-template
</a>
  </div>

  </div>

  <h3 class="sr-only">Resources</h3>
  <div class="mt-3">
    <a class="Link--muted" href="#readme">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-book mr-2">
    <path fill-rule="evenodd" d="M0 1.75A.75.75 0 01.75 1h4.253c1.227 0 2.317.59 3 1.501A3.744 3.744 0 0111.006 1h4.245a.75.75 0 01.75.75v10.5a.75.75 0 01-.75.75h-4.507a2.25 2.25 0 00-1.591.659l-.622.621a.75.75 0 01-1.06 0l-.622-.621A2.25 2.25 0 005.258 13H.75a.75.75 0 01-.75-.75V1.75zm8.755 3a2.25 2.25 0 012.25-2.25H14.5v9h-3.757c-.71 0-1.4.201-1.992.572l.004-7.322zm-1.504 7.324l.004-5.073-.002-2.253A2.25 2.25 0 005.003 2.5H1.5v9h3.757a3.75 3.75 0 011.994.574z"></path>
</svg>
      Readme
</a>  </div>

  <h3 class="sr-only">License</h3>
  <div class="mt-3">
    <a href="/othneildrew/Best-README-Template/blob/master/LICENSE.txt" class="Link--muted">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" height="16" width="16" class="octicon octicon-law mr-2">
    <path fill-rule="evenodd" d="M8.75.75a.75.75 0 00-1.5 0V2h-.984c-.305 0-.604.08-.869.23l-1.288.737A.25.25 0 013.984 3H1.75a.75.75 0 000 1.5h.428L.066 9.192a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.514 3.514 0 00.686.45A4.492 4.492 0 003 11c.88 0 1.556-.22 2.023-.454a3.515 3.515 0 00.686-.45l.045-.04.016-.015.006-.006.002-.002.001-.002L5.25 9.5l.53.53a.75.75 0 00.154-.838L3.822 4.5h.162c.305 0 .604-.08.869-.23l1.289-.737a.25.25 0 01.124-.033h.984V13h-2.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-2.5V3.5h.984a.25.25 0 01.124.033l1.29.736c.264.152.563.231.868.231h.162l-2.112 4.692a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.517 3.517 0 00.686.45A4.492 4.492 0 0013 11c.88 0 1.556-.22 2.023-.454a3.512 3.512 0 00.686-.45l.045-.04.01-.01.006-.005.006-.006.002-.002.001-.002-.529-.531.53.53a.75.75 0 00.154-.838L13.823 4.5h.427a.75.75 0 000-1.5h-2.234a.25.25 0 01-.124-.033l-1.29-.736A1.75 1.75 0 009.735 2H8.75V.75zM1.695 9.227c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L3 6.327l-1.305 2.9zm10 0c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L13 6.327l-1.305 2.9z"></path>
</svg>
        MIT License
    </a>
  </div>

          </div>
        </div>
          <div class="BorderGrid-row">
            <div class="BorderGrid-cell">
              <h2 class="h4 mb-3">
  <a href="/othneildrew/Best-README-Template/releases" class="Link--primary no-underline">
    Releases
</a></h2>

    <div class="text-small color-text-secondary">No releases published</div>

            </div>
          </div>
          <div class="BorderGrid-row">
            <div class="BorderGrid-cell">
              <h2 class="h4 mb-3">
  <a href="/users/othneildrew/packages?repo_name=Best-README-Template" class="Link--primary no-underline">
    Packages <span title="0" hidden="hidden" class="Counter">0</span>
</a></h2>


      <div class="text-small color-text-secondary">
        No packages published <br>
      </div>



            </div>
          </div>
          <div class="BorderGrid-row">
            <div class="BorderGrid-cell">
              <h2 class="h4 mb-3">
  <a href="/othneildrew/Best-README-Template/graphs/contributors" class="Link--primary no-underline">
    Contributors <span title="5" class="Counter">5</span>
</a></h2>


    
  <ul class="list-style-none d-flex flex-wrap mb-n2">
      <li class="mb-2 mr-2">
        <a class="" data-hovercard-type="user" data-hovercard-url="/users/othneildrew/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/othneildrew">
          <img class="d-block avatar-user" src="https://avatars.githubusercontent.com/u/24785934?s=64&amp;v=4" width="32" height="32" alt="@othneildrew">
</a>      </li>
      <li class="mb-2 mr-2">
        <a class="" data-hovercard-type="user" data-hovercard-url="/users/douglascayers/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/douglascayers">
          <img class="d-block avatar-user" src="https://avatars.githubusercontent.com/u/4142577?s=64&amp;v=4" width="32" height="32" alt="@douglascayers">
</a>      </li>
      <li class="mb-2 mr-2">
        <a class="" data-hovercard-type="user" data-hovercard-url="/users/akarzim/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/akarzim">
          <img class="d-block avatar-user" src="https://avatars.githubusercontent.com/u/130560?s=64&amp;v=4" width="32" height="32" alt="@akarzim">
</a>      </li>
      <li class="mb-2 mr-2">
        <a class="" data-hovercard-type="user" data-hovercard-url="/users/hivestrung/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/hivestrung">
          <img class="d-block avatar-user" src="https://avatars.githubusercontent.com/u/27841209?s=64&amp;v=4" width="32" height="32" alt="@hivestrung">
</a>      </li>
      <li class="mb-2 mr-2">
        <a class="" data-hovercard-type="user" data-hovercard-url="/users/GeovanniG/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/GeovanniG">
          <img class="d-block avatar-user" src="https://avatars.githubusercontent.com/u/32276348?s=64&amp;v=4" width="32" height="32" alt="@GeovanniG">
</a>      </li>
  </ul>



            </div>
          </div>
      </div>
</div>
</div></div>



  </div>

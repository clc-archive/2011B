<div class="section">
<h3><a href="/category/publication/">Publications</a></h3>
<ul>
    <li><a href="/category/publication/annual-report/">Annual Report</a></li>
    <li><a href="/category/publication/conservation-minded/">Conservation Minded</a></li>
    <li><a href="/category/publication/land-matters/">Land Matters</a></li>
    <li><a href="/category/publication/newsletter/">Newsletter</a></li>
</ul>
</div>

<?
if ( is_category('publication') | ( is_page( news) )		 ) 
				{
					include('sidebar.publications.list.php'); 
				}
				
				?>
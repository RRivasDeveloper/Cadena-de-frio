<?php
function navBarG(){
    echo
    echo"<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel=\"stylesheet" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin=\"anonymous">";"

echo "<nav class=\"navbar navbar-expand-md\" style=\"background-color: #3fa8b3;\" aria-label=\"Fourth navbar example\">";
echo "    <div class=\"container-fluid\">";
echo "     <a style=\"color: #fff;\" class=\"navbar-brand\" href=\"#\">Expand at md</a>";
      echo "     <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample04\" aria-controls=\"navbarsExample04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
      echo "       <span class=\"navbar-toggler-icon\"></span>";
        echo "    </button>";

      echo "    <div  class=\"navbar-collapse collapse\" id=\"navbarsExample04\">";
      echo "      <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">";
        echo "        <li class=\"nav-item\">";
          echo "          <a style=\"color: #fff;\"  class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>";
            echo "        </li>";
          echo "        <li class=\"nav-item\">";
          echo "         <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Link</a>";
            echo "       </li>";
            echo "       <li class=\"nav-item\">";
          echo "      <a  style=\"color: #fff;\"class=\"nav-link disabled\">Disabled</a>";
   echo "              </li>";
          echo "        <li class=\"nav-item dropdown\">";
          echo "          <a  style=\"color: #fff;\"class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Dropdown</a>";
            echo "        <ul  class=\"dropdown-menu\">";
            echo "             <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>";
            echo "            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>";
              echo "            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>";
              echo "          </ul>";
            echo "        </li>";
          echo "      </ul>";
        echo "     </div>";
      echo "     <div>";
      echo "     <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Salir</a>";
      echo "      </div>";
      echo "    </div>";
    echo " </nav>";
}
  ?>
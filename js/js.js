
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    /**
//  * Determines the sort function return value.
//  *
//  * @param a any
//  *   The first row's cell value to compare.
//  * @param b any
//  *   The second row's cell value to compare.
//  * @param n boolean
//  *   If the column's class list contains 'num'.
//  *
//  * @return number
//  *   The comparison value to use when sorting.
//  */
//      function OrderBy(a, b, n) {
//         if (n) return a - b;
//         if (a < b) return -1;
//         if (a > b) return 1;
//         return 0;
//       }

//       /**
//        * Removes sort classes from cells not in the column of the clicked header.
//        *
//        * @param $table object
//        *   The JQuery context to clear cells within.
//        * @param $excludeIndex number
//        *   The clicked TH element's index.
//        */
//       function clearSortClasses($table, $excludeIndex) {
//         $table
//           .find("th, td")
//           // Ignore cells that are in the newly selected column.
//           .filter(function (i) {
//             return $(this).index() !== $excludeIndex;
//           })
//           // Remove all classes we care about.
//           .removeClass("selected asc desc");
//       }

//       $("th a").click(function () {
//         // Look up the element clicked and its parent table.
//         console.log("clicked")
//         const $th = $(this).closest("th");
//         const $table = $th.closest("table");
//         // Determine the state of the column for sort.
//         const isSelected = $th.hasClass("selected");
//         const sortOrder = $th.hasClass("asc") ? "desc" : "asc";
//         const column = $th.index();
//         // Remove the sort classes from all other columns' cells.
//         clearSortClasses($table, column);
//         // Determine and set the direction of sort on the column.
//         $th.removeClass("asc desc selected").addClass(sortOrder + " selected");
//         // Apply the 'input' class to a TH to reference the input
//         // element within the TD for the value to compare for sort.
//         const isInput = $th.hasClass("input");
//         const isNum = $table
//           .find("tbody > tr")
//           .children("td")
//           .eq(column)
//           .hasClass("number-column");
//         const rows = $table.find("tbody > tr").get();
//         rows.sort(function (rowA, rowB) {
//           let keyA, keyB;
//           if (isInput) {
//             keyA = $(rowA)
//               .children("td")
//               .eq(column)
//               .children("input")
//               .val()
//               .toUpperCase();
//             keyB = $(rowB)
//               .children("td")
//               .eq(column)
//               .children("input")
//               .val()
//               .toUpperCase();
//           } else {
//             keyA = $(rowA).children("td").eq(column).text().toUpperCase();
//             keyB = $(rowB).children("td").eq(column).text().toUpperCase();
//           }
//           if (isNum) {
//             keyA = parseInt(keyA);
//             keyB = parseInt(keyB);
//           }
//           if (sortOrder === "asc") return OrderBy(keyA, keyB, isNum);
//           return OrderBy(keyB, keyA, isNum);
//         });
//         $.each(rows, function (index, row) {
//           // Set the cell in the clicked column as selected in this row.
//           $(row).children("td").eq(column).addClass("selected");
//           // Add the row back into the table body.
//           $table.children("tbody").append(row);
//         });
//         return false;
//       });

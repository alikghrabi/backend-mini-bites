<?php
function filterByStatus($todos, $status) {
    $filtered = [];
    foreach ($todos as $todo) {
        if ($todo['status'] === $status) {
            $filtered[] = $todo;
        }
    }
    return $filtered;
}

function groupByStatus($todos) {
    $grouped = [];
    foreach ($todos as $todo) {
        $status = $todo['status'];
        if (!isset($grouped[$status])) {
            $grouped[$status] = [];
        }
        $grouped[$status][] = $todo;
    }
    return $grouped;
}
?>

<?php

echo $_SERVER['X_REAL_IP'] ?? $_SERVER['REMOTE_ADDR'];
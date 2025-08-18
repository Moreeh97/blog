<?php
namespace App\Logger;

class FileLogger implements Logger
{
    public function log(string $message): void
    {
        // TODO: Write message to a file (logs/app.log)
        $logFile = __DIR__ . '/../../storage/logs/app.log';
        $time = date('Y-m-d H:i:s');
        file_put_contents(
            $logFile,
            "[$time] INFO: $message\n",
            FILE_APPEND
        );
    }
}

class FileLoader {
public function load(string $file) {
// TODO: Simulate loading a file

}
}

class Decoder {
public function decode(string $file) {
// TODO: Simulate decoding
}
}
class AudioOutput {
public function playSound(string $decoded) {
// TODO: Simulate playing sound
}
}
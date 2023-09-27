<?php

namespace BookStack\Activity\Controllers;

use BookStack\App\Model;
use BookStack\Entities\Models\Entity;
use BookStack\Http\Controller;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function publish(Request $request)
    {
        $page = $this->getValidatedModelFromRequest($request);
        $page->publish();

        $this->showSuccessNotification(trans('activities.published_notification', [
            'name' => $page->name,
        ]));

        return redirect()->back();
    }

    public function unpublish(Request $request)
    {
        $page = $this->getValidatedModelFromRequest($request);
        $page->unpublish();

        $this->showSuccessNotification(trans('activities.unpublish_notification', [
            'name' => $page->name,
        ]));

        return redirect()->back();
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    protected function getValidatedModelFromRequest(Request $request): Entity
    {
        $modelInfo = $this->validate($request, [
            'type' => ['required', 'string'],
            'id'   => ['required', 'integer'],
        ]);

        if (!class_exists($modelInfo['type'])) {
            throw new \Exception('Model not found');
        }

        /** @var Model $model */
        $model = new $modelInfo['type']();

        $modelInstance = $model->newQuery()
            ->where('id', '=', $modelInfo['id'])
            ->first(['id', 'name', 'owned_by']);

        $inaccessibleEntity = ($modelInstance instanceof Entity && !userCan('view', $modelInstance));
        if (is_null($modelInstance) || $inaccessibleEntity) {
            throw new \Exception('Model instance not found');
        }

        return $modelInstance;
    }
}
